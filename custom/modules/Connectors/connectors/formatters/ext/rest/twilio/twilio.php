<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2011 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/


/*********************************************************************************
* Description:
* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
* Reserved. Contributor(s): contact@synolia.com - www.synolia.com
* *******************************************************************************/

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
?>
