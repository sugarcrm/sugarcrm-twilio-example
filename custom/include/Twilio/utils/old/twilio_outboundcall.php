<?php
global $current_user, $sugar_config;

$current_user->retrieve($_REQUEST['user_id']);

require('custom/include/Twilio/Services/Twilio.php');


$twilio_connector = new ext_rest_twilio();
$sid = $twilio_connector->getProperty('twilio_account_id');
$token = $twilio_connector->getProperty('twilio_auth_token');		
//$appSid     = $twilio_connector->getProperty('twilio_app_id');
        
// Sugar user's Twilio phone number
$userPublic = "14083530128";
// Sugar user's real phone number
$userPrivate = $current_user->phone_other;
// the end recipient (the Sugar contact)
$callRecipient = $_REQUEST['phone_number'];

$client = new Services_Twilio($sid, $token);
$call = $client->account->calls->create(
  $userPublic, // Sugar user's twilio number (caller ID)
  $userPrivate, // Call this number
  // Use Twimlet to dial the callRecipient when the Sugar user picks up
  //"http://twimlets.com/forward?PhoneNumber={$callRecipient}"
  $sugar_config['site_url']."/index.php?entryPoint=twilio_connectcall&callRecipient={$callRecipient}"
);

//var_dump($call);
//echo $_REQUEST['user_id'];
//die();
?>
