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

    /*
     * Additional code for phone number format to E.164
     * add by xye@sugarcrm.com begin
     */
use com\google\i18n\phonenumbers\PhoneNumberUtil;
use com\google\i18n\phonenumbers\PhoneNumberFormat;
use com\google\i18n\phonenumbers\NumberParseException;

require_once ('custom/include/lib/phonenumbers/PhoneNumberUtil.php');
   /*
    * Additional code for phone number format to E.164
    * add by xye@sugarcrm.com begin
    */
require_once('include/SugarFields/Fields/Phone/SugarFieldPhone.php');

class CustomSugarFieldPhone extends SugarFieldPhone {
    
	/**
     * This should be called when the bean is saved. The bean itself will be passed by reference
     * 
     * @param SugarBean bean - the bean performing the save
     * @param array params - an array of paramester relevant to the save, most likely will be $_REQUEST
     */
	public function save($bean, $params, $field, $properties, $prefix = ''){
		 parent::save($bean, $params, $field, $properties, $prefix);
                 if (isset($params[$prefix.$field]))
                    $bean->$field = $params[$prefix.$field];
                 
                 /*
                  * Additional code for phone number format to E.164
                  * add by xye@sugarcrm.com begin
                  */
                                 
                 $phoneNumberStr = $bean->$field;
                 /*
                  * ISO 3166-1 two-letter country code
                  * http://www.iso.org/iso/country_names_and_code_elements
                  */
                 global $sugar_config;
                 
                 $default_region = "US";
                 
                 if(isset($sugar_config['phonenumber_default_region']) && !empty($sugar_config['phonenumber_default_region'])){
                     $default_region = $sugar_config['phonenumber_default_region'];
                 }
                 
                 $phoneUtil = PhoneNumberUtil::getInstance();
                 //_ppl('phone number--->'.$phoneNumberStr);
                 try {                     
                         $phoneNumberProto = $phoneUtil->parseAndKeepRawInput($phoneNumberStr, $default_region);   
                        
                         $isValid = $phoneUtil->isValidNumber($phoneNumberProto);              
                         //_ppl(array($phoneNumberStr, $isValid, $phoneNumberProto, $phoneUtil->format($phoneNumberProto, PhoneNumberFormat::E164)));
                         if($isValid){      
                             if($phoneNumberProto->hasExtension()){                             
                                 $bean->$field = $phoneUtil->format($phoneNumberProto, PhoneNumberFormat::E164). ' ext. '.$phoneNumberProto->getExtension();
                             }else{
                                 $bean->$field = $phoneUtil->format($phoneNumberProto, PhoneNumberFormat::E164);                      
                             }
                         }
                 } catch (NumberParseException $e) {
                           _ppl($e->__toString());
//                         echo $e;
                 }                 
                 
                 /*
                  * Additional code for phone number format to E.164
                  * add by xye@sugarcrm.com end
                  */
    }    
    
}
?>