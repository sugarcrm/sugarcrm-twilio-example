<?php

require('custom/include/Twilio/Services/Twilio.php');

global $sugar_config;

$callRecipient = $_REQUEST["callRecipient"];

$response = new Services_Twilio_Twiml();
$response->say('Now connecting you.');

$action = $sugar_config['site_url']."/index.php?entryPoint=twilio_callcomplete&callRecipient=4082186881";
$dialAttributes = array(
   'record' => 'true',
   'action' => $action,
);

$response->dial($callRecipient, $dialAttributes);

print $response;

?>
