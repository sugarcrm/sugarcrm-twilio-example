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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
//$entry_point_registry['twilio_outboundcall'] = array('file'=>'custom/include/Twilio/utils/twilio_outboundcall.php', 'auth' => false);
//$entry_point_registry['twilio_connectcall'] = array('file'=>'custom/include/Twilio/utils/twilio_connectcall.php', 'auth' => false);
//$entry_point_registry['twilio_callcomplete'] = array('file'=>'custom/include/Twilio/utils/twilio_callcomplete.php', 'auth' => false);
$entry_point_registry['twilio'] = array('file'=>'custom/include/Twilio/utils/twilio_entrypoint_actions.php', 'auth' => false);
$entry_point_registry['twilioclient'] = array('file'=>'custom/include/Twilio/utils/twilioclient_entrypoint_actions.php', 'auth' => true);
$entry_point_registry['twilioconnect'] = array('file'=>'custom/include/Twilio/utils/twilio_connect_twiml.php', 'auth' => false);

?>
