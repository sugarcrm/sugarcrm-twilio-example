<?php
require('custom/include/Twilio/Services/Twilio.php');
require('custom/modules/Connectors/connectors/sources/ext/rest/twilio/twilio.php');

function loadTwilioClient() {
	global $current_user, $sugar_config;
	//var_dump($current_user);die();
	$agentId = md5($current_user->id);

	$twilio_connector = new ext_rest_twilio();
	$accountSid = $twilio_connector->getProperty('twilio_account_id');
        $authToken = $twilio_connector->getProperty('twilio_auth_token');		
        $appSid     = $twilio_connector->getProperty('twilio_app_id');
        
	$capability = new Services_Twilio_Capability($accountSid, $authToken);
	$capability->allowClientOutgoing($appSid);
	$capability->allowClientIncoming($agentId);
	$token = $capability->generateToken();

	$twilio_client_tpl = "custom/include/Twilio/twilio_client.tpl";
	$smarty = new Sugar_Smarty();
	$smarty->assign("TWILIO_TOKEN", $token);   

        
        $smarty->assign("SITE_URL", $sugar_config['site_url']);
 
        
	echo $smarty->fetch($twilio_client_tpl);
}

$_REQUEST['action']();

?>
