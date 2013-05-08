<?php
require('custom/include/Twilio/Services/Twilio.php');
require('custom/modules/Connectors/connectors/sources/ext/rest/twilio/twilio.php');

function outboundCall() {
   global $current_user, $sugar_config;

   $twilio_connector = new ext_rest_twilio();
   $sid = $twilio_connector->getProperty('twilio_account_id');
   $token = $twilio_connector->getProperty('twilio_auth_token');

   // Sugar user's Twilio phone number
   $userPublic = $twilio_connector->getProperty('twilio_phone_number');
   
   // Sugar user's real phone number
   $userPrivate = $_REQUEST['user_phone_number'];
   // the end recipient (the Sugar contact)
   $callRecipient = $_REQUEST['recipient_phone_number'];
   $module_name = $_REQUEST['module_name'];
   $record_id = $_REQUEST['record_id'];

   $client = new Services_Twilio($sid, $token);
   $call = $client->account->calls->create(
      $userPublic, // Sugar user's twilio number (caller ID)
      $userPrivate, // Call this number
      // Use Twimlet to dial the callRecipient when the Sugar user picks up
      //"http://twimlets.com/forward?PhoneNumber={$callRecipient}"
      $sugar_config['site_url']."/index.php?entryPoint=twilio&action=connectCall&callRecipient={$callRecipient}&to_pdf=true&module_name={$module_name}&record_id={$record_id}"
   );

   var_dump($call);
   //echo $_REQUEST['user_id'];
   //die();
}

function connectCall() {
   global $sugar_config;
   ob_flush();
   $callRecipient = $_REQUEST["callRecipient"];
   $module_name = $_REQUEST['module_name'];
   $record_id = $_REQUEST['record_id'];

   $response = new Services_Twilio_Twiml();
   $response->pause(5);
   $response->say('Now connecting you.');

   $action = $sugar_config['site_url']."/index.php?entryPoint=twilio&action=callComplete&to_pdf=true&module_name={$module_name}&record_id={$record_id}";
   $dialAttributes = array(
      'record' => 'true',
      'action' => $action,
   );

   $response->dial($callRecipient, $dialAttributes);

   print $response;

}


function callComplete() {
    
    global $timedate, $current_user;    
    $current_user = new User();
    $current_user->retrieve('1');
//	$log = true;
//
//	if($log) {
//		$fp = fopen('callcomplete.txt', 'a+');
//		$callResponse = print_r($_REQUEST,true);
//		fwrite($fp, $callResponse);
//		fclose($fp);
//	}
    
    $twilio_connector = new ext_rest_twilio();
    $sid = $twilio_connector->getProperty('twilio_account_id');
    $token = $twilio_connector->getProperty('twilio_auth_token');
	
    $client = new Services_Twilio($sid, $token);
    $call = new Call();
    
    //_ppl('request begin');
    //_ppl($_REQUEST);
    //_ppl('request end');
    
    $record_id = '';
    $module_name = '';
    
    $record_id = isset($_REQUEST['record_id'])?$_REQUEST['record_id']:'';
    $module_name = isset($_REQUEST['module_name'])?$_REQUEST['module_name']:'';
    
    $call_sid = $_REQUEST['DialCallSid'];
    $call->direction = "Outbound";
    if(strpos(strtolower($_REQUEST['From']), 'client:') === false){
        //Call in or using call conection
        if(strpos(strtolower($_REQUEST['Direction']),'inbound') !== false)
        {
            //this is inbound call
            $call_sid = $_REQUEST['CallSid'];
            $call->direction = "Inbound";
        }
    }
    

    $call_record = $client->account->calls->get($call_sid); 
    
//    if(is_array($call_record->recordings)){
//        _ppl('array');
//    }else{
//        _ppl('not array');
//    }
    //_ppl($call_record);
//    foreach($call_record->recordings as $record_obj){
//        $call->description= "Recording URL: ". $record_obj->RecordingUrl;
//        //break;
//        _ppl('recording url:' . $record_obj->RecordingUrl);
//        _ppl('recording url2:' . $record_obj->recordingurl);
//    }
    //$RecordingUrl
    _ppl('from: '.$call_record->from);
    _ppl('to: '.$call_record->to);
    _ppl('Direction: '.$call_record->direction);

	
    if($call->direction == 'Inbound') {
            $call->name = "Call from {$call_record->from}";
            /*
                * currently, we only support looking up the phone number in E.164 number formatting, see following URL for detail
                * http://www.twilio.com/help/faq/phone-numbers/how-do-i-format-phone-numbers-to-work-internationally
                */
            $matched_obj = lookup_inbound_obj($call_record->from);
            $module_name = isset($matched_obj['module_name'])?$matched_obj['module_name']:'';
            $record_id = isset($matched_obj['record_id'])?$matched_obj['record_id']:'';

    } else if(strpos(strtolower($_REQUEST['From']), 'client:') === false){
        $call->name = "Call to {$call_record->to} (using connection)";		
    } else {
        $call->name = "Call to {$call_record->to}";
    }
    
    $start_time = new DateTime(isset($call_record->starttime)?$call_record->starttime:'');
    $end_time = new DateTime(isset($call_record->endtime)?$call_record->endtime:'');

    $timezone = new DateTimeZone("UTC");
    $start_time->setTimezone($timezone);
    $end_time->setTimezone($timezone);
    
    $call->date_start = $start_time->format($timedate->get_db_date_time_format());
    $call->date_end = $end_time->format($timedate->get_db_date_time_format());
    
    _ppl('duration: '.$call_record->duration);

    
    $duration_hours = floor($call_record->duration / 3600);
    $duration_minutes = $call_record->duration/60 % 60;

    $call->duration_hours = $duration_hours;

    if($duration_minutes > 0 && $duration_minutes <= 15)
            $call->duration_minutes = 15;
    elseif($duration_minutes > 15 && $duration_minutes <= 30)
            $call->duration_minutes = 30;
    elseif($duration_minutes > 30 && $duration_minutes <= 45)
            $call->duration_minutes = 45;
    else
            $call->duration_minutes = 0;

    $call->status = "Held";

    $call->team_id = '1';    
    $call->assigned_user_id = '1';    
    $call->parent_type = 'Contacts';
    $call->parent_id = $record_id;
    if($module_name == 'Contacts'){
        $call->contact_id = $record_id;
        $contact_bean = new Contact();
        $contact_bean->retrieve($record_id);
        $call->parent_type = 'Accounts';
        $call->parent_id = $contact_bean->account_id;
    }
    if($module_name == 'Accounts'){
        $call->parent_id = $record_id;
        $call->parent_type = 'Accounts';
    }
    $call->save();

    if($module_name == 'Contacts'){
        $call->load_relationship("contacts");
        $call->contacts->add($record_id);            
    }else if($module_name == 'Leads'){
        $call->load_relationship("leads");
        $call->leads->add($record_id);            
    }else if($module_name == 'Users'){
        $call->load_relationship("users");
        $call->users->add($record_id);            
    }

    header('Content-type: text/xml');

?>
<Response>
<Hangup/> 
</Response>
<?php

}

function loadDetailView() {
	global $sugar_config;
	$phone_number = $_REQUEST['phone_number'];
	$phone_fields = array();
	$phone_fields_where = "WHERE ";

	$contact = new Contact();

	foreach($contact->field_defs as $field_def) {
		//var_dump($field_def);
		if($field_def['type'] == 'phone') {
			if($field_def['source'] == 'custom_fields')
				$field_name = "{$contact->table_name}_cstm.{$field_def['name']}";
			else
				$field_name = "{$contact->table_name}.{$field_def['name']}";

			$phone_fields[] = "{$field_name} = '{$phone_number}'";
		}
	}

	$phone_fields_where .= implode(" OR ", $phone_fields);

	if(isset($contact->custom_fields))
	$custom_join = $contact->custom_fields->getJOIN();
	else $custom_join = false;

	if($custom_join)
	{
		$query = "SELECT $contact->table_name.*". $custom_join['select']. " FROM $contact->table_name " . $custom_join['join'];
	}
	else
	{
		$query = "SELECT $contact->table_name.* FROM $contact->table_name ";
	}
	$query .= " $phone_fields_where";

	$result = $contact->db->limitQuery($query,0,1,true, "Retrieving record $phone_fields_where:");

	if( empty($result))
	{
		header("Location: ".$sugar_config['site_url']."/index.php?module=Home");
	}
	$row = $contact->db->fetchByAssoc($result);
	if(!empty($row))
	{
		header("Location: ".$sugar_config['site_url']."/index.php?module=Contacts&action=DetailView&record=".$row['id']);
	}

	//echo $query;

	//echo $phone_fields_where;
	//$contact->retrieve_by_string_fields($phone_fields);
	//$contacts = $contact->get_list("",$phone_fields_where);
	//var_dump($contacts);
	die();

}


function inbound_lookup(){
    global $timedate, $current_user;    
    $current_user = new User();
    $current_user->retrieve('1');
    
    $phonenumber = $_REQUEST['phonenumber'];
    
    if(!empty($phonenumber)){
        $inbound_obj = lookup_inbound_obj($phonenumber);
        _ppl('return obj begin');
        _ppl($inbound_obj);
        _ppl('return obj end');
        echo json_encode($inbound_obj);
    }
}

$_REQUEST['action']();

?>
