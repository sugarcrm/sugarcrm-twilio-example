<?php

$hook_version = 1; 
$hook_array = Array(); 
$hook_array['after_ui_frame'] = Array(); 
$hook_array['after_ui_frame'][] = Array(1, 'load phone number validation', 'custom/modules/LogicHookClass.php','LogicHookClass', 'addPhoneNumValidation'); 


?>
