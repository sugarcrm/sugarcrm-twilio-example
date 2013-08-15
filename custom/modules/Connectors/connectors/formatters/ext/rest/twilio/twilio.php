<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

require_once('include/connectors/formatters/default/formatter.php');

class ext_rest_twilio_formatter extends default_formatter {
	
public function getDetailViewFormat() {
   global $current_user, $beanList;

   $bean = new $beanList[$_REQUEST['module']]();
   $bean->retrieve($_REQUEST['record']);

   $user_phone_fields = array('phone_work','phone_mobile','phone_other');
   
   $phone_numbers = array();
   $phone_numbers['twilio_client'] = 'Browser Phone';
   
   for($i=0; $i<count($user_phone_fields); $i++) {
      if(!empty($current_user->$user_phone_fields[$i]))
         $phone_numbers[$current_user->$user_phone_fields[$i]] = $current_user->$user_phone_fields[$i];
   }
   
   $phone_numbers_list = get_select_options_with_id($phone_numbers,"");
   $this->_ss->assign('phone_numbers_list', $phone_numbers_list);
   
   global $sugar_config;
   $default_region = "US";

   if(isset($sugar_config['phonenumber_default_region']) && !empty($sugar_config['phonenumber_default_region'])){
       $default_region = $sugar_config['phonenumber_default_region'];
   }
   
   $this->_ss->assign('DEFAULT_REGION', $default_region);
   
   $dropdown_javascript = "var dropdown_option = new Array();";
   foreach($phone_numbers as $number_key=>$number_value){
       if(!empty($number_key)){
           $dropdown_javascript .= "dropdown_option['{$number_key}'] = '{$number_value}';";
       }
   }
      
   $this->_ss->assign('DROPDOWN_JAVASCRIPT', $dropdown_javascript);
 
   $field_def = $this->_ss->get_template_vars('vardef');
   $field_name = $field_def['name'];
                    
   $recipient_phone_number = $bean->$field_name;
   $this->_ss->assign('recipient_phone_number', $recipient_phone_number);


   return $this->fetchSmarty();

   $GLOBALS['log']->error($GLOBALS['app_strings']['ERR_MISSING_MAPPING_ENTRY_FORM_MODULE']);
   return '';
}	

public function getIconFilePath() {
   return 'custom/modules/Connectors/connectors/formatters/ext/rest/twilio/tpls/twilio.png';
}   

}
