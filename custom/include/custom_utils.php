<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
Copyright 2013 SugarCRM. All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are
permitted provided that the following conditions are met:

   1. Redistributions of source code must retain the above copyright notice, this list of
      conditions and the following disclaimer.

   2. Redistributions in binary form must reproduce the above copyright notice, this list
      of conditions and the following disclaimer in the documentation and/or other materials
      provided with the distribution.

THIS SOFTWARE IS PROVIDED BY SUGARCRM ``AS IS'' AND ANY EXPRESS OR IMPLIED
WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND
FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL SUGARCRM OR
CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF
ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

The views and conclusions contained in the software and documentation are those of the
authors and should not be interpreted as representing official policies, either expressed
or implied, of SugarCRM.
*/

if(!defined('sugarEntry'))define('sugarEntry', true);

use com\google\i18n\phonenumbers\PhoneNumberUtil;
use com\google\i18n\phonenumbers\PhoneNumberFormat;
use com\google\i18n\phonenumbers\NumberParseException;
    
function lookup_inbound_obj($phone_number){
    
    $cache_file = 'cache/include/twilio/phone_field_map.php';
    
    
    
    if(!is_file($cache_file)){
        return array('module_name'=>'', 'record_id'=>'');
        //return empty
    }
     
    include $cache_file;
    
    $matched_obj = search_phone($module_phone_field_list, $phone_number);
    
//    $array_list = array();
//    $array_list['module_name'] = $obj_list
//    foreach($obj_list as $module_name => $bean_obj){ 
//            
//            if($bean_obj instanceof Person){
//                $array_list[$module_name][$bean_obj->id]['first_name'] = $bean_obj->first_name;
//                $array_list[$module_name][$bean_obj->id]['last_name'] = $bean_obj->last_name;
//            }else{
//                $array_list[$module_name][$bean_obj->id]['name'] = $bean_obj->name;
//            }
//         
//    }  
    return $matched_obj;
    
    /*
     * example of return data 
     * 
     * Array
(
    [module_name] => Contacts
    [record_id] => 24ba9a3e-c372-f9ab-4f34-5088527092a7
)
     */ 
}

function get_phone_field_map(){    
    include('include/modules.php');
    
    $module_phone_field_list = array();
    foreach($moduleList as $module_name){
        $bean_obj = BeanFactory::getBean($module_name);
        if(isset($bean_obj->module_dir)){
//            if($bean_obj->module_dir == 'Contacts'){
//                echo '<pre>';
//                print_r($bean_obj->field_defs);
//                echo '</pre>';
//                die();
//            }
            foreach($bean_obj->field_defs as $field_name=>$field_def){
                if($field_def['type'] == 'phone' && isset($field_def['dbType'])){
                    if(strlen($field_name)>2 && substr($field_name, -1, 2) == '_c'){
                            continue;
                    }else{
                        $module_phone_field_list[$bean_obj->module_dir][] = $field_name;
                    }    
                }
            }
        }        
    }
    $default_module_array_order = array('Contacts'=>array(), 'Leads'=>array(), 'Accounts'=>array(), 'Prospects'=>array());
    
    $module_phone_field_list = array_merge($default_module_array_order, $module_phone_field_list);

    //write_array_to_file('module_phone_field_list', $module_phone_field_list, $cache_file);
    return $module_phone_field_list;
}

function search_phone($module_phone_field_list, $phone_number){
    $matched_obj = array();
    
    foreach($module_phone_field_list as $module_name=>$phone_fields){
        $where = '';
        $bean_obj = BeanFactory::getBean($module_name);
        $table_name = $bean_obj->table_name;
        $i = 0;
        foreach($phone_fields as $phone_field){
            if($i != 0)
                $where.=' or ';
            $where = $where . $table_name.'.'.$phone_field.'=\''.$phone_number.'\'';
            $i++;
        }
        //use the last modified record if there are multiple records in one module with the same phone number
        $bean_list = $bean_obj->get_list('date_modified desc', $where);
        //find the first matched record
        if(count($bean_list['list'])>0)
        {
            $matched_obj['module_name'] = $module_name;
            $matched_obj['record_id'] = $bean_list['list'][0]->id;
            
            if($bean_obj instanceof Person){
                $matched_obj['first_name'] = $bean_list['list'][0]->first_name;
                $matched_obj['last_name'] = $bean_list['list'][0]->last_name;
                $matched_obj['name'] = $bean_list['list'][0]->first_name . ' '. $bean_list['list'][0]->last_name;                
            }else{
                $matched_obj['name'] = $bean_list['list'][0]->name;
            }
            
            break;
        }
        //$obj_array[$module_name] = $bean_list;
    }
    return $matched_obj;
}

function phone_number_national_format($phoneNumberStr, $default_region){
    
    require_once ('custom/include/lib/phonenumbers/PhoneNumberUtil.php');

    $phoneUtil = PhoneNumberUtil::getInstance();
    try {    
            $phoneNumberProto = $phoneUtil->parseAndKeepRawInput($phoneNumberStr, $default_region);               
            $isValid = $phoneUtil->isValidNumber($phoneNumberProto);              
            $countryCode = $phoneNumberProto->getCountryCode();
            $phoneNumberNational = $phoneUtil->format($phoneNumberProto, PhoneNumberFormat::NATIONAL);
            if($isValid){
                    $phoneNumberStr = '+' . $countryCode .' '. $phoneNumberNational;
            }
            
            $region_code = $phoneUtil->getRegionCodeForCountryCode($countryCode);
                
            return array($phoneNumberStr, $region_code);
    } catch (NumberParseException $e) {
            _ppl($e->__toString());
            return array($phoneNumberStr, '');
    }   
}

function phone_number_e164($phoneNumberStr, $default_region){
    
    require_once ('custom/include/lib/phonenumbers/PhoneNumberUtil.php');

    $phoneUtil = PhoneNumberUtil::getInstance();
    try {    
            $phoneNumberProto = $phoneUtil->parseAndKeepRawInput($phoneNumberStr, $default_region);               
            $isValid = $phoneUtil->isValidNumber($phoneNumberProto);              
            $countryCode = $phoneNumberProto->getCountryCode();
            $phoneNumberE164 = $phoneUtil->format($phoneNumberProto, PhoneNumberFormat::E164);
                    
            if($isValid){
                    $phoneNumberStr = $phoneNumberE164;
            }
            
            $region_code = $phoneUtil->getRegionCodeForCountryCode($countryCode);
            
            return array($phoneNumberStr, $region_code);
    } catch (NumberParseException $e) {
            _ppl($e->__toString());
            return array($phoneNumberStr, '');
    }   
}
function getCountryCodeForValidRegion($regionCode){
    require_once ('custom/include/lib/phonenumbers/PhoneNumberUtil.php');

    $phoneUtil = PhoneNumberUtil::getInstance();
    
    $metadata = $phoneUtil->getMetadataForRegion($regionCode);
    return $metadata->getCountryCode();
                
}

?>
