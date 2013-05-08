<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_login'] = Array(); 
$hook_array['after_login'][] = Array(1, 'SugarFeed old feed entry remover', 'modules/SugarFeed/SugarFeedFlush.php','SugarFeedFlush', 'flushStaleEntries'); 
$hook_array['after_login'][] = Array(1, 'Load user into Twilio iFrame to enable browser phone', 'custom/include/Twilio/TwilioHooks.php','TwilioHooks','loadIFrame');

$hook_array['before_logout'] = Array(); 
$hook_array['before_logout'][] = Array(1, 'Rmove users from a list which includes all users enabled twilio softphone', 'custom/include/Twilio/TwilioHooks.php','TwilioHooks','disableSoftPhone');


?>