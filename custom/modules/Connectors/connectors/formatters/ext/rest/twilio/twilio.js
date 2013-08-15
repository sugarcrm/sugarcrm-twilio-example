/**
Copyright 2013 SugarCRM. All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are
permitted provided that the following conditions are met:

   1. Redistributions of source code must retain the above copyright notice, this list of
      conditions and the following disclaimer.

   2. Redistributions in binary form must reproduce the above copyright notice, this list
      of conditions and the following disclaimer in the documentation and/or other materials
      provided with the distribution.

THIS SOFTWARE IS PROVIDED BY SUGARCRM ``AS IS'' AND ANY EXPRESS OR IMPLIED
WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND
FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL SUGARCRM OR
CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF
ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

The views and conclusions contained in the software and documentation are those of the
authors and should not be interpreted as representing official policies, either expressed
or implied, of SugarCRM.
*/

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

