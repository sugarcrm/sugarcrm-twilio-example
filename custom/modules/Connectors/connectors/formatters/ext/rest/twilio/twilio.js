
function twilio_outboundCall(el) {
    var user_phone_number = document.getElementById('user_phone_number').value;
    var recipient_phone_number = document.getElementById('recipient_phone_number').value;
    var module_name = document.getElementsByName('module')[0].value;
    var record_id = document.getElementsByName('record')[0].value;
    
    //console.info(module_name);
    //console.info(record_id);

    if(user_phone_number == 'twilio_client') {
        parent.$('#dial-phone-number').val(recipient_phone_number);
        parent.call();
    }
    else {
         var url = 'index.php?entryPoint=twilio&action=outboundCall&recipient_phone_number='+encodeURIComponent(recipient_phone_number)+'&user_phone_number='+encodeURIComponent(user_phone_number)+'&to_pdf=true&module_name='+module_name+'&record_id='+record_id;
         
         //alert(url);
         console.log(url);
         YAHOO.util.Connect.asyncRequest('POST', url, outboundCallHandler);
        // console.info({
           // 'to': recipient_phone_number,
           // 'callerid': user_phone_number
       // });
        // parent.Client.call({
           // 'to': recipient_phone_number,
           // 'callerid': user_phone_number
       // });
    }

	return false;
}

var outboundCallHandler = {
	success: function(data) {
		console.log(data);
	},
	failure: function(data) {
        console.log(data.responseText);
	}
};

