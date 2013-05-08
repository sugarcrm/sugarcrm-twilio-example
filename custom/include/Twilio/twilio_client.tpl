<html>
<head>
<link rel="stylesheet" type="text/css" href="custom/include/Twilio/style.css">
<link rel="stylesheet" type="text/css" href="custom/include/Twilio/iframe.css">
<script type="text/javascript" src="http://static.twilio.com/libs/twiliojs/1.0/twilio.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

    
    
<script type="text/javascript">
{literal}
	window.OpenVBX = {home: null, assets: null, client_capability: null, client_params: null};
{/literal}
	OpenVBX.home = '{$SITE_URL}';
	OpenVBX.assets = '{$SITE_URL}';
        OpenVBX.client_capability = '{$TWILIO_TOKEN}';
</script>

<script type="text/javascript" src="custom/include/Twilio/javascript/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="custom/include/Twilio/javascript/jquery-ui-1.8.14.custom.min.js"></script>
<script type="text/javascript" src="custom/include/Twilio/javascript/jquery.cookie.js"></script>
<script type="text/javascript" src="custom/include/Twilio/javascript/iframe.js"></script>
<script type="text/javascript" src="custom/include/Twilio/javascript/client.js"></script>

    <script type="text/javascript">
        var twilio_token = "{$TWILIO_TOKEN}";
    </script>

    {literal}
    <script type="text/javascript">

		Twilio.Device.setup(twilio_token);

		Twilio.Device.connect(function (conn) {
			Client.log('event: connect');
			Client.connect(conn);
			//window.frames['sugar_iframe'].location = "index.php?module=Contacts&action=DetailView&record=c0a52c0a-9e3e-ca09-2cc3-507607b7544c";
            //window.frames['sugar_iframe'].location = "http://ps.sugarcrm.com/b2b/sugar/index.php?entryPoint=twilio&action=loadDetailView&phone_number="+conn.parameters.From;
		});

		Twilio.Device.disconnect(function (conn) {
			Client.log('event: disconnect');			
                        var module_name = conn.message.module_name;
                        var record_id = conn.message.record_id;
			Client.disconnect(conn);
                            //alert(module_name);
                        if(typeof(module_name) != "undefined" && module_name !== null
                            && typeof(record_id) != "undefined" && record_id !== null   ){
                                //alert(record_id);
                            window.frames['sugar_iframe'].location.reload(true);
                        }
		});

		Twilio.Device.incoming(function (conn) {
			Client.log('event: incoming');			
			Client.incoming(conn);
                    
                    document.getElementById("sugar_iframe").contentWindow.ajaxStatus.showStatus('Looking up database for incoming call...');
                    
                    //document.getElementById("sugar_iframe").contentWindow.YAHOO.util.Connect.asyncRequest('POST', "index.php", lookup_callback, 'entryPoint=twilio&action=inbound_lookup&phonenumber='+encodeURIComponent(conn.parameters.From));

                    $.ajax({
                        type: 'POST',
                        url: 'index.php?entryPoint=twilio&action=inbound_lookup&phonenumber='+encodeURIComponent(conn.parameters.From),
                        data:{},
                        success:function(data){
                                var inbound_obj = jQuery.parseJSON(data);

                                if(typeof inbound_obj.name !='undefined' && typeof inbound_obj.record_id != 'undefined' && typeof inbound_obj.module_name != 'undefined'){
                                    var record_link = 'index.php?module='+inbound_obj.module_name+'&action=DetailView&record='+inbound_obj.record_id;
                                    var html_link = '<a style="text-decoration:none;color:#FFFFFF" href="javascript:void(0)" onclick="javascript:window.frames[\'sugar_iframe\'].location = \''+record_link+'\'">'+inbound_obj.name+'</a>';    
                                    Client.message('Incoming Call From: '+html_link); 
                                    conn.parameters.From = html_link;    
                                }                            
                            },
                        failure:function(data){
                            
                            }
                    });
                    
                    document.getElementById("sugar_iframe").contentWindow.ajaxStatus.hideStatus();
//                       $('#client-ui-message').text('ffffffff'); 
                    
		});

		function call() {
                    var iframe = document.getElementById('sugar_iframe');
                    var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
                    var module_name = innerDoc.getElementsByName("module")[0].value;
                    var record_id = innerDoc.getElementsByName("record")[0].value;

		    params = {"PhoneNumber": $("#dial-phone-number").val(), "module_name":module_name, "record_id":record_id };
                    //Client.connect(params);
                    Client.connection = Twilio.Device.connect(params);

                    //console.log(Client.connection);

                    //parent.Client.ui.hide_actions('button');
                    //parent.Client.ui.show_actions('.answer');
                    parent.Client.ui.toggleCallViewState('call');
                    parent.Client.ui.toggleCallView('open');                    
		}

		function hangup() {
			Twilio.Device.disconnectAll();
		}

                $('#dialer #client-ui-actions button').hide();

    </script>
    {/literal}
    
{literal}
<style type="text/css" media="screen">#__soundFlash__ {visibility:hidden}#__connectionFlash__ {visibility:hidden}</style>
{/literal}
</head>

<body>

<div id="container">
<div id="dialer" class="closed" style="right: -315px; ">

	<div class="client-ui-tab open">

		<div class="client-ui-bg-overlay"><!-- leave me alone! --></div>
		<div class="client-ui-inset">
			<div id="client-ui-tab-status">
				<div class="client-ui-tab-wedge"><a href="#dialer"><span class="symbol">&raquo;</span> Hide</a></div>
				<div class="client-ui-tab-status-inner">
					<div class="mic"></div>
					<h3 class="client-ui-timer">00:00</h3>
				</div><!-- .client-ui-tab-status-inner -->
			</div><!-- #client-ui-tab-status -->
		</div><!-- #client-ui-tab-inset -->

	</div><!-- .client-ui-tab .open -->

	<div class="client-ui-content">
		<div class="client-ui-bg-overlay"><!-- leave me alone! --></div>
		<div class="client-ui-inset">

			<div id="client-make-call" style="display: block; ">
				<form id="make-call-form" action="" method="post" _lpchecked="1">

	<div id="call-options">
		<div id="call-options-summary">
			<span id="summary-call-using" class="browser"></span>
			<span id="summary-caller-id">Caller ID: <span>(408) 353-0128</span></span>
			<span id="summary-call-toggle" class="open">&laquo;</span>
		</div>

		<div id="call-options-inputs" style="">
			<div id="call-options-descriptions">
				<p id="call-option-description-browser" style="">Your call will be placed using the browserphone.</p>
				<p id="call-option-description-device" style="display: none; ">You will be called at <span class="device-number">(000) 000-0000</span> and then connected to your destination.</p>
			</div>
			<p>Your Caller ID will be <span id="call-option-description-caller-id" class="device-number">(408) 353-0128</span></p>
		</div>
	</div>

	<h2>Make a Call</h2>

	<fieldset>
		<input type="text" name="dial-phone-number" value="" id="dial-phone-number" placeholder="(555) 867 5309"><button name="dial_input_button" type="button" id="dial-input-button"><span class="button-text" onclick="call();">Call</span></button>	</fieldset>
</form><!-- #make-call-form -->


			</div><!-- #client-make-call -->

			<div id="client-on-call" style="display: none; ">
				<div id="client-ui-status" class="clearfix">
	<h2 id="client-ui-message">Ready</h2>
	<h3 class="client-ui-timer">00:00</h3>
</div><!-- #client-ui-status -->
<div id="client-ui-pad" class="clearfix">
	<div class="client-ui-button-row">
		<div class="client-ui-button">
			<div class="client-ui-button-number">1</div>
			<div class="client-ui-button-letters"></div>
		</div>
		<div class="client-ui-button">
			<div class="client-ui-button-number">2</div>
			<div class="client-ui-button-letters">abc</div>
		</div>
		<div class="client-ui-button">
			<div class="client-ui-button-number">3</div>
			<div class="client-ui-button-letters">def</div>
		</div>
	</div>
	<div class="client-ui-button-row">
		<div class="client-ui-button">
			<div class="client-ui-button-number">4</div>
			<div class="client-ui-button-letters">ghi</div>
		</div>
		<div class="client-ui-button">
			<div class="client-ui-button-number">5</div>
			<div class="client-ui-button-letters">jkl</div>
		</div>
		<div class="client-ui-button">
			<div class="client-ui-button-number">6</div>
			<div class="client-ui-button-letters">mno</div>
		</div>
	</div>
	<div class="client-ui-button-row">
		<div class="client-ui-button">
			<div class="client-ui-button-number">7</div>
			<div class="client-ui-button-letters">pqrs</div>
		</div>
		<div class="client-ui-button">
			<div class="client-ui-button-number">8</div>
			<div class="client-ui-button-letters">tuv</div>
		</div>
		<div class="client-ui-button">
			<div class="client-ui-button-number">9</div>
			<div class="client-ui-button-letters">wxyz</div>
		</div>
	</div>
	<div class="client-ui-button-row">
		<div class="client-ui-button">
			<div class="client-ui-button-number asterisk">*</div>
			<div class="client-ui-button-letters"></div>
		</div>
		<div class="client-ui-button">
			<div class="client-ui-button-number">0</div>
			<div class="client-ui-button-letters"></div>
		</div>
		<div class="client-ui-button">
			<div class="client-ui-button-number">#</div>
			<div class="client-ui-button-letters"></div>
		</div>
	</div>
</div><!-- /client-ui-pad -->
<div id="client-ui-actions">
	<button id="client-ui-mute" class="client-ui-action-button mute" style="display: none; ">Unmute</button>
	<button id="client-ui-answer" class="client-ui-action-button answer" style="display: none; ">Answer</button>
	<button id="client-ui-hangup" class="client-ui-action-button hangup" style="display: none; ">Hangup</button>
	<button id="client-ui-close" class="client-ui-action-button close" style="display: none; ">Close</button>
</div><!-- #client-ui-actions -->			</div><!-- #client-on-call -->
		</div>
	</div>

</div>
<iframe id="sugar_iframe" name="sugar_iframe" src="index.php" width="100%" height="100%" frameborder="no" />

</div>


</body></html>