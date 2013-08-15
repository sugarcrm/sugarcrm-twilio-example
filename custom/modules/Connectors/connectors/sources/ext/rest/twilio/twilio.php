<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************

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

 ********************************************************************************/

require_once('include/connectors/sources/ext/rest/rest.php');
require_once('custom/include/Twilio/Services/Twilio.php');

class ext_rest_twilio extends ext_rest {
	public function __construct(){
		parent::__construct();
		$this->_enable_in_wizard = false;
		$this->_enable_in_hover = true;
                $this->_enable_in_admin_mapping = false;
	}
	
	/*
	 * getItem
	 *
	 * As the linked in connector does not have a true API call, we simply
	 * override this abstract method
	 */
	public function getItem($args=array(), $module=null){}


    /*
	 * getList
	 *
	 * As the linked in connector does not have a true API call, we simply
	 * override this abstract method

	 */

    public function getList($args = array(), $module = null)
    {
        $params = array('count' => 10, 'start' => 0);

        if (!empty($args['maxResults']))
            $params['count'] = $args['maxResults'];

        if (!empty($args['startIndex']))
            $params['start'] = $args['startIndex'];


        $results = FALSE;

        try
        {
            $queryFields = "(id,first-name,last-name,industry,headline,summary,location:(name,country:(code)),positions:(title,summary,company:(name)))";
            $url = "http://api.linkedin.com/v1/people/~/connections:$queryFields";
            $response = $this->_eapm->makeRequest("GET", $url, $params);
            $results = $this->formatListResponse($response);
        }

        catch (Exception $e)
        {
            $GLOBALS['log']->fatal("Unable to retrieve item list for linkedin connector.");
        }

        return $results;
    }


    private function formatListResponse($resp)
    {
        $records = array();
        $xmlResp = simplexml_load_string($resp);
        if ($xmlResp === FALSE)
            throw new Exception('Unable to parse list response');

        foreach ($xmlResp->person as $person)
        {
            $tmp = array();
            $this->convertPersonListResponeToArray($person, $tmp);
            $records[] = $tmp;

        }

        return array('totalResults' => (int)$xmlResp->attributes()->total,
                     'startIndex' => (int)$xmlResp->attributes()->start,
                     'records' => $records);
    }


    private function convertPersonListResponeToArray(SimpleXMLElement $xmlResp, &$result, $suffix = '')
    {
        foreach ((array)$xmlResp as $k => $v)
        {
            $key = !empty($suffix) ? "{$suffix}-{$k}" : $k;
            if ($v instanceof SimpleXMLElement) {
                $this->convertPersonListResponeToArray($v, $result, $key);
            }

            else if (is_array($v)) //Skip over attributes
            {
                if ($k == 'position')
                {
                    $latestPosition = $v[0];
                    $result['company_name'] = (string)$latestPosition->company->name;
                    $result['title'] = (string)$latestPosition->title;
                    $result['position-summary'] = (string)$latestPosition->summary;

                }
            }
            else
            {
                $result[$key] = $v;
            }
        }
    }
    
    
    public function filterAllowedModules( $pre_moduleList )
    {        
        global $moduleList;
        include('include/modules.php');
    
        $filter_module_list = array();
        foreach($moduleList as $module_name){
            $bean_obj = BeanFactory::getBean($module_name);
            if(isset($bean_obj->module_dir)){
                foreach($bean_obj->field_defs as $field_name=>$field_def){
                    if($field_def['type'] == 'phone' && isset($field_def['dbType'])){
                        if(strlen($field_name)>2 && substr($field_name, -1, 2) == '_c'){
                                continue;
                        }else{
                            $filter_module_list[] = $module_name;   
                            break;
                        }    
                    }
                }
            }        
        }       
        
        $filter_module_list = array_unique($filter_module_list);
        
        foreach($pre_moduleList as $module_name=>$module_label){
            if(!in_array($module_name, $filter_module_list)){
                unset($pre_moduleList[$module_name]);
            }
        }
        
        return $pre_moduleList;
    }
    
    public function savePhone_mappings(){
        $modules_sources = ConnectorUtils::getDisplayConfig();
        
        $cache_file = 'cache/include/twilio/phone_field_map.php';
    
        //Make the directory for the config file
        if(!file_exists('cache/include/twilio')) {
            mkdir_recursive('cache/include/twilio');
        }

         
        $module_phone_field_list = get_phone_field_map();
        
        foreach($module_phone_field_list as $module_name => $phone_fields){
            if(!isset($modules_sources[$module_name]) || !isset($modules_sources[$module_name]['ext_rest_twilio'])){
                unset($module_phone_field_list[$module_name]);
            }
        }
        
        write_array_to_file('module_phone_field_list', $module_phone_field_list, $cache_file);      
        
        
    }
    
    public function getFieldsWithParams($param_name, $param_value)
    {
        
        $modules_sources = ConnectorUtils::getDisplayConfig();
        
        $cache_file = 'cache/include/twilio/phone_field_map.php';
    
        //Make the directory for the config file
        if(!file_exists('cache/include/twilio')) {
            mkdir_recursive('cache/include/twilio');
        }

        $module_phone_field_list = array();
        if(!is_file($cache_file)){
//            build_phone_field_map($cache_file);
            $module_phone_field_list = get_phone_field_map();
        }else{
            include $cache_file;
        }
        
        foreach($module_phone_field_list as $module_name => $phone_fields){
            if(!isset($modules_sources[$module_name]) || !isset($modules_sources[$module_name]['ext_rest_twilio'])){
                unset($module_phone_field_list[$module_name]);
            }
        }
        
        $return_phone_list = array();
        foreach($module_phone_field_list as $module_name => $fields_list){
            foreach($fields_list as $field_name){
                $return_phone_list[$field_name] = '';
            }
        }
   
//        if(empty($this->_field_defs)){
//            $this->loadVardefs();
//        }
//        $fields_with_param = array();
//        foreach($this->_field_defs as $key => $def){
//            if(!empty($def[$param_name]) && ($def[$param_name] == $param_value)){
//                    $fields_with_param[$key] = $def;
//            }
//        }
//        
        
        return $return_phone_list;
    }
    
    
    public function getMapping()
    {       
        $modules_sources = array();        
        
        if(!file_exists(CONNECTOR_DISPLAY_CONFIG_FILE)) {
            //Make the directory for the config file
            if(!file_exists('custom/modules/Connectors/metadata')) {
                mkdir_recursive('custom/modules/Connectors/metadata');
            }

            if(!write_array_to_file('modules_sources', $modules_sources, CONNECTOR_DISPLAY_CONFIG_FILE)) {
                //Log error and return empty array
                $GLOBALS['log']->fatal("Cannot write \$modules_sources to " . CONNECTOR_DISPLAY_CONFIG_FILE);
            }

        }

        require(CONNECTOR_DISPLAY_CONFIG_FILE);  
        
        $cache_file = 'cache/include/twilio/phone_field_map.php';
    
        //Make the directory for the config file
        if(!file_exists('cache/include/twilio')) {
            mkdir_recursive('cache/include/twilio');
        }

        $module_phone_field_list = get_phone_field_map();
        if(!is_file($cache_file)){
//            build_phone_field_map($cache_file);
            $module_phone_field_list = get_phone_field_map();
        }else{
            include $cache_file;
        }
        
        foreach($module_phone_field_list as $module_name => $phone_fields){
            if(!isset($modules_sources[$module_name]) || !isset($modules_sources[$module_name]['ext_rest_twilio'])){
                unset($module_phone_field_list[$module_name]);
            }
        }
        
        $return_mapping = array();
        foreach($module_phone_field_list as $module_name => $fields_list){
            $bean_obj = BeanFactory::getBean($module_name);
            foreach($fields_list as $field_name){
                if(isset($bean_obj->field_defs[$field_name])){
                    $return_mapping['beans'][$module_name][$field_name] = $field_name;
                }else{                    
                    $return_mapping['beans'][$module_name][$field_name] = '';
                }
            }
        }  
        
        return $return_mapping;
    }
    
    
    public function setProperties($properties=array())
    {
        global $sugar_config;
        
        if(!empty($this->_config) && isset($this->_config['properties'])) {
            $twilio_account_id = isset($properties['twilio_account_id'])?$properties['twilio_account_id']:'';
            $twilio_auth_token = isset($properties['twilio_auth_token'])?$properties['twilio_auth_token']:'';            
            
            $twilio_app_id = isset($properties['twilio_app_id'])?$properties['twilio_app_id']:'';
            
            if(!empty($twilio_account_id) && !empty($twilio_auth_token)){
                $client = new Services_Twilio($twilio_account_id, $twilio_auth_token);
                                
                $app_token = md5($sugar_config['site_url']);
                $app_name = "Sugar_Twilio - {$app_token}";
                        
                $applications = $client->account->applications->getIterator(0, 10, array(
				'FriendlyName' => $app_name
			));
			
                $application = false;
                foreach ($applications as $_application)
                {
                        if ($_application->friendly_name == $app_name) 
                        {
                                $application = $_application;
                                break;
                        }
                }

                $site_url = $sugar_config['site_url'];
                
                $params = array(
                        'FriendlyName' => $app_name,
                        'VoiceUrl' => $site_url.'/index.php?entryPoint=twilioconnect',
                        'VoiceFallbackUrl' => '',
                        'VoiceMethod' => 'GET',
                        'SmsUrl' => '',
                        'SmsFallbackUrl' => '',
                        'SmsMethod' => 'POST'
                );

                if (!empty($application))
                {
                        $application->update($params);
                }
                else 
                {
                        $application = $client->account->applications->create($app_name, $params);
                }

                $twilio_app_id = $application->sid;
                
                $numbers = $client->account->incoming_phone_numbers;
                foreach($numbers as $number){
                    if($number->phone_number == $properties['twilio_phone_number']){
                        $number->update(array('VoiceApplicationSid' => $twilio_app_id));
                        break;
                    }
                }
                
                $properties['twilio_app_id'] = $twilio_app_id;
            }            
            
            $this->_config['properties'] = $properties;
            $this->config_decrypted = true; // Don't decrypt external configs
        }
    }

    /**
        * Save source's config to custom directory
        */
    public function saveConfig()
    {
        parent::saveConfig();
    }
    
    public function saveMappingHook($mapping) {
        parent::saveMappingHook($mapping);
        $this->savePhone_mappings();
    }
        
        
}
