<?php
header('Content-type: text/xml');

global $sugar_config;

$record = "true";
$action = $sugar_config['site_url']."/index.php?entryPoint=twilio&amp;action=callComplete&amp;to_pdf=true";
 
require('custom/modules/Connectors/connectors/sources/ext/rest/twilio/twilio.php');
$twilio_connector = new ext_rest_twilio();
$callerId = $twilio_connector->getProperty('twilio_phone_number');

// put your default Twilio Client name here, for when a phone number isn't given
$clients_list = array();
$clients_list_file_path = 'custom/include/Twilio/clients_list.php';
if(file_exists($clients_list_file_path)) {
    include($clients_list_file_path);
}
            
$number = array_keys($clients_list);

//$number = array("admin","brian");
// $number = array();
// get the phone number from the page request parameters, if given
if (isset($_REQUEST['PhoneNumber'])) {
    $number[] = htmlspecialchars($_REQUEST['PhoneNumber']);
}
 
_ppl($number);
$record_id = '';
$module_name = '';
if(isset($_REQUEST['record_id']) && isset($_REQUEST['module_name'])){
    $record_id = $_REQUEST['record_id'];
    $module_name = $_REQUEST['module_name'];
}
if(!empty($record_id) && !empty($module_name)){
    $action .= "&amp;record_id={$record_id}&amp;module_name={$module_name}";
}
//echo '<pre>';
//print_r($_REQUEST);
//echo '</pre>';
$numberOrClient = '';
$dial_attributes = array();
if(!empty($record))
  $dial_attributes[] = "record='{$record}'";

if(!empty($action))
        $dial_attributes[] = "action='{$action}'";
 
if(!empty($_REQUEST['PhoneNumber']))
  $dial_attributes[] = "callerId='{$callerId}'";
  
// wrap the phone number or client name in the appropriate TwiML verb
// by checking if the number given has only digits and format symbols
if(count($number)>0){    
    foreach($number as $id) {
        if (preg_match("/^[\d\+\-\(\) ]+$/", $id)) {
            $numberOrClient .= "<Number>" . $id . "</Number>";
        } else {
            $numberOrClient .= "<Client>" . $id . "</Client>";
        }
    }
} 

?>
 
<Response>
<?php
if(count($number)>0){
?>
    <Dial <?php echo implode(" ", $dial_attributes) ?>>
          <?php echo $numberOrClient ?>
    </Dial>
<?php
}else{
?>
   <Say language="en" voice="woman">I'm sorry, there is no representative available right now, please call us later or send email to contact @ sugar CRM dot com, goodbye.</Say><Hangup/> 
<?php
}
?>
</Response>