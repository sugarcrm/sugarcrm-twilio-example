<?php
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

$manifest =array (
  'acceptable_sugar_versions' => 
  array (
  ),
  'author' => 'SugarCRM, Inc.',
  'description' => 'For Use By Sugar CRM employees ONLY',
  'icon' => '',
  'is_uninstallable' => 'false',
  'name' => 'Twilio Integration v1.6.4',
  'published_date' => '2013-01-03 11:38:35',
  'type' => 'module',
  'version' => '1357241915',
);
$installdefs =array (
  'id' => 'sugar6145',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/custom/Extension/modules/ACLRoles/Ext/Vardefs/sugarfield_enablesoftphone.php',
      'to' => 'custom/Extension/modules/ACLRoles/Ext/Vardefs/sugarfield_enablesoftphone.php',
    ),
    1 => 
    array (
      'from' => '<basepath>/custom/include/MVC/Controller/entry_point_registry.php',
      'to' => 'custom/include/MVC/Controller/entry_point_registry.php',
    ),
    2 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Account.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Account.php',
    ),
    3 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Accounts.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Accounts.php',
    ),
    4 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Application.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Application.php',
    ),
    5 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Applications.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Applications.php',
    ),
    6 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/AuthorizedConnectApp.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/AuthorizedConnectApp.php',
    ),
    7 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/AuthorizedConnectApps.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/AuthorizedConnectApps.php',
    ),
    8 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/AvailablePhoneNumber.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/AvailablePhoneNumber.php',
    ),
    9 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/AvailablePhoneNumbers.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/AvailablePhoneNumbers.php',
    ),
    10 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Call.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Call.php',
    ),
    11 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Calls.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Calls.php',
    ),
    12 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Conference.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Conference.php',
    ),
    13 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Conferences.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Conferences.php',
    ),
    14 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/ConnectApp.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/ConnectApp.php',
    ),
    15 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/ConnectApps.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/ConnectApps.php',
    ),
    16 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/IncomingPhoneNumber.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/IncomingPhoneNumber.php',
    ),
    17 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/IncomingPhoneNumbers.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/IncomingPhoneNumbers.php',
    ),
    18 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Member.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Member.php',
    ),
    19 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Members.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Members.php',
    ),
    20 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Notification.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Notification.php',
    ),
    21 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Notifications.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Notifications.php',
    ),
    22 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/OutgoingCallerId.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/OutgoingCallerId.php',
    ),
    23 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/OutgoingCallerIds.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/OutgoingCallerIds.php',
    ),
    24 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Participant.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Participant.php',
    ),
    25 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Participants.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Participants.php',
    ),
    26 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Queue.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Queue.php',
    ),
    27 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Queues.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Queues.php',
    ),
    28 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Recording.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Recording.php',
    ),
    29 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Recordings.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Recordings.php',
    ),
    30 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Sandbox.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Sandbox.php',
    ),
    31 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/ShortCode.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/ShortCode.php',
    ),
    32 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/ShortCodes.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/ShortCodes.php',
    ),
    33 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/SmsMessage.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/SmsMessage.php',
    ),
    34 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/SmsMessages.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/SmsMessages.php',
    ),
    35 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Transcription.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Transcription.php',
    ),
    36 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Rest/Transcriptions.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Rest/Transcriptions.php',
    ),
    37 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/AutoPagingIterator.php',
      'to' => 'custom/include/Twilio/Services/Twilio/AutoPagingIterator.php',
    ),
    38 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Capability.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Capability.php',
    ),
    39 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/InstanceResource.php',
      'to' => 'custom/include/Twilio/Services/Twilio/InstanceResource.php',
    ),
    40 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/ListResource.php',
      'to' => 'custom/include/Twilio/Services/Twilio/ListResource.php',
    ),
    41 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Page.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Page.php',
    ),
    42 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/PartialApplicationHelper.php',
      'to' => 'custom/include/Twilio/Services/Twilio/PartialApplicationHelper.php',
    ),
    43 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/RequestValidator.php',
      'to' => 'custom/include/Twilio/Services/Twilio/RequestValidator.php',
    ),
    44 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Resource.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Resource.php',
    ),
    45 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/RestException.php',
      'to' => 'custom/include/Twilio/Services/Twilio/RestException.php',
    ),
    46 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/TinyHttp.php',
      'to' => 'custom/include/Twilio/Services/Twilio/TinyHttp.php',
    ),
    47 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio/Twiml.php',
      'to' => 'custom/include/Twilio/Services/Twilio/Twiml.php',
    ),
    48 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/Twilio.php',
      'to' => 'custom/include/Twilio/Services/Twilio.php',
    ),
    49 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/Services/cacert.pem',
      'to' => 'custom/include/Twilio/Services/cacert.pem',
    ),
    50 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/add-button-bg.png',
      'to' => 'custom/include/Twilio/images/add-button-bg.png',
    ),
    51 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/applet-drag-grip.png',
      'to' => 'custom/include/Twilio/images/applet-drag-grip.png',
    ),
    52 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/assign-owner-button-bg.png',
      'to' => 'custom/include/Twilio/images/assign-owner-button-bg.png',
    ),
    53 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/button-bg.png',
      'to' => 'custom/include/Twilio/images/button-bg.png',
    ),
    54 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/call-button-bg.png',
      'to' => 'custom/include/Twilio/images/call-button-bg.png',
    ),
    55 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/device-drag-grip.png',
      'to' => 'custom/include/Twilio/images/device-drag-grip.png',
    ),
    56 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/dropdown-select-button-bg.png',
      'to' => 'custom/include/Twilio/images/dropdown-select-button-bg.png',
    ),
    57 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/main-context-menu-bg.png',
      'to' => 'custom/include/Twilio/images/main-context-menu-bg.png',
    ),
    58 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/mic_big.png',
      'to' => 'custom/include/Twilio/images/mic_big.png',
    ),
    59 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/nav-title-bg.png',
      'to' => 'custom/include/Twilio/images/nav-title-bg.png',
    ),
    60 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/normal-button-bg.png',
      'to' => 'custom/include/Twilio/images/normal-button-bg.png',
    ),
    61 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/openvbx-header-logo.png',
      'to' => 'custom/include/Twilio/images/openvbx-header-logo.png',
    ),
    62 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/play-pause-stop-bg.png',
      'to' => 'custom/include/Twilio/images/play-pause-stop-bg.png',
    ),
    63 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/quick-call-button-bg.png',
      'to' => 'custom/include/Twilio/images/quick-call-button-bg.png',
    ),
    64 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/quick-call-popup-button-bg.png',
      'to' => 'custom/include/Twilio/images/quick-call-popup-button-bg.png',
    ),
    65 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/quick-sms-button-bg.png',
      'to' => 'custom/include/Twilio/images/quick-sms-button-bg.png',
    ),
    66 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/quick-sms-popup-button-bg.png',
      'to' => 'custom/include/Twilio/images/quick-sms-popup-button-bg.png',
    ),
    67 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/quick-sms-send-button-bg.png',
      'to' => 'custom/include/Twilio/images/quick-sms-send-button-bg.png',
    ),
    68 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/sms-button-bg.png',
      'to' => 'custom/include/Twilio/images/sms-button-bg.png',
    ),
    69 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/submit-button-bg.png',
      'to' => 'custom/include/Twilio/images/submit-button-bg.png',
    ),
    70 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/user-drag-grip.png',
      'to' => 'custom/include/Twilio/images/user-drag-grip.png',
    ),
    71 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/user-list-status-icon-sprite.png',
      'to' => 'custom/include/Twilio/images/user-list-status-icon-sprite.png',
    ),
    72 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/images/vbx-client-status.png',
      'to' => 'custom/include/Twilio/images/vbx-client-status.png',
    ),
    73 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/javascript/client.js',
      'to' => 'custom/include/Twilio/javascript/client.js',
    ),
    74 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/javascript/iframe.js',
      'to' => 'custom/include/Twilio/javascript/iframe.js',
    ),
    75 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/javascript/jquery-1.6.2.min.js',
      'to' => 'custom/include/Twilio/javascript/jquery-1.6.2.min.js',
    ),
    76 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/javascript/jquery-ui-1.8.14.custom.min.js',
      'to' => 'custom/include/Twilio/javascript/jquery-ui-1.8.14.custom.min.js',
    ),
    77 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/javascript/jquery.cookie.js',
      'to' => 'custom/include/Twilio/javascript/jquery.cookie.js',
    ),
    78 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/utils/old/twilio_callcomplete.php',
      'to' => 'custom/include/Twilio/utils/old/twilio_callcomplete.php',
    ),
    79 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/utils/old/twilio_connectcall.php',
      'to' => 'custom/include/Twilio/utils/old/twilio_connectcall.php',
    ),
    80 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/utils/old/twilio_outboundcall.php',
      'to' => 'custom/include/Twilio/utils/old/twilio_outboundcall.php',
    ),
    81 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/utils/twilio_connect_twiml.php',
      'to' => 'custom/include/Twilio/utils/twilio_connect_twiml.php',
    ),
    82 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/utils/twilio_entrypoint_actions.php',
      'to' => 'custom/include/Twilio/utils/twilio_entrypoint_actions.php',
    ),
    83 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/utils/twilioclient_entrypoint_actions.php',
      'to' => 'custom/include/Twilio/utils/twilioclient_entrypoint_actions.php',
    ),
    84 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/TwilioHooks.php',
      'to' => 'custom/include/Twilio/TwilioHooks.php',
    ),
    85 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/iframe.css',
      'to' => 'custom/include/Twilio/iframe.css',
    ),
    86 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/style.css',
      'to' => 'custom/include/Twilio/style.css',
    ),
    87 => 
    array (
      'from' => '<basepath>/custom/include/Twilio/twilio_client.tpl',
      'to' => 'custom/include/Twilio/twilio_client.tpl',
    ),
    88 => 
    array (
      'from' => '<basepath>/custom/include/connectors/utils/ConnectorHtmlHelper.php',
      'to' => 'custom/include/connectors/utils/ConnectorHtmlHelper.php',
    ),
    89 => 
    array (
      'from' => '<basepath>/custom/include/custom_utils.php',
      'to' => 'custom/include/custom_utils.php',
    ),
    90 => 
    array (
      'from' => '<basepath>/custom/modules/ACLRoles/language/en_us.lang.php',
      'to' => 'custom/modules/ACLRoles/language/en_us.lang.php',
    ),
    91 => 
    array (
      'from' => '<basepath>/custom/modules/ACLRoles/DetailView.php',
      'to' => 'custom/modules/ACLRoles/DetailView.php',
    ),
    92 => 
    array (
      'from' => '<basepath>/custom/modules/ACLRoles/DetailView.tpl',
      'to' => 'custom/modules/ACLRoles/DetailView.tpl',
    ),
    93 => 
    array (
      'from' => '<basepath>/custom/modules/ACLRoles/EditView.php',
      'to' => 'custom/modules/ACLRoles/EditView.php',
    ),
    94 => 
    array (
      'from' => '<basepath>/custom/modules/ACLRoles/EditView.tpl',
      'to' => 'custom/modules/ACLRoles/EditView.tpl',
    ),
    95 => 
    array (
      'from' => '<basepath>/custom/modules/ACLRoles/Save.php',
      'to' => 'custom/modules/ACLRoles/Save.php',
    ),
    96 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/formatters/ext/rest/twilio/tpls/default.tpl',
      'to' => 'custom/modules/Connectors/connectors/formatters/ext/rest/twilio/tpls/default.tpl',
    ),
    97 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/formatters/ext/rest/twilio/tpls/twilio.png',
      'to' => 'custom/modules/Connectors/connectors/formatters/ext/rest/twilio/tpls/twilio.png',
    ),
    98 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/formatters/ext/rest/twilio/twilio.js',
      'to' => 'custom/modules/Connectors/connectors/formatters/ext/rest/twilio/twilio.js',
    ),
    99 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/formatters/ext/rest/twilio/twilio.php',
      'to' => 'custom/modules/Connectors/connectors/formatters/ext/rest/twilio/twilio.php',
    ),
    100 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/bg_BG.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/bg_BG.lang.php',
    ),
    101 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/ca_ES.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/ca_ES.lang.php',
    ),
    102 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/cs_CZ.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/cs_CZ.lang.php',
    ),
    103 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/da_DK.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/da_DK.lang.php',
    ),
    104 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/de_DE.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/de_DE.lang.php',
    ),
    105 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/en_UK.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/en_UK.lang.php',
    ),
    106 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/en_us.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/en_us.lang.php',
    ),
    107 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/es_ES.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/es_ES.lang.php',
    ),
    108 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/et_EE.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/et_EE.lang.php',
    ),
    109 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/fr_FR.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/fr_FR.lang.php',
    ),
    110 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/he_IL.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/he_IL.lang.php',
    ),
    111 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/hu_HU.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/hu_HU.lang.php',
    ),
    112 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/it_it.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/it_it.lang.php',
    ),
    113 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/ja_JP.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/ja_JP.lang.php',
    ),
    114 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/lt_LT.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/lt_LT.lang.php',
    ),
    115 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/nb_NO.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/nb_NO.lang.php',
    ),
    116 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/nl_NL.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/nl_NL.lang.php',
    ),
    117 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/pl_PL.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/pl_PL.lang.php',
    ),
    118 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/pt_PT.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/pt_PT.lang.php',
    ),
    119 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/ro_RO.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/ro_RO.lang.php',
    ),
    120 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/ru_RU.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/ru_RU.lang.php',
    ),
    121 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/sr_RS.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/sr_RS.lang.php',
    ),
    122 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/sv_SE.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/sv_SE.lang.php',
    ),
    123 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/tr_TR.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/tr_TR.lang.php',
    ),
    124 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/zh_CN.lang.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/language/zh_CN.lang.php',
    ),
    125 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/config.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/config.php',
    ),
    126 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/mapping.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/mapping.php',
    ),
    127 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/twilio.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/twilio.php',
    ),
    128 => 
    array (
      'from' => '<basepath>/custom/modules/Connectors/connectors/sources/ext/rest/twilio/vardefs.php',
      'to' => 'custom/modules/Connectors/connectors/sources/ext/rest/twilio/vardefs.php',
    ),
    129 => 
    array (
      'from' => '<basepath>/custom/modules/Users/logic_hooks.php',
      'to' => 'custom/modules/Users/logic_hooks.php',
    ),
    130 => 
    array (
      'from' => '<basepath>/custom/include/SugarFields/Fields/Phone/DetailView.tpl',
      'to' => 'custom/include/SugarFields/Fields/Phone/DetailView.tpl',
    ),
    131 => 
    array (
      'from' => '<basepath>/custom/include/SugarFields/Fields/Phone/EditView.tpl',
      'to' => 'custom/include/SugarFields/Fields/Phone/EditView.tpl',
    ),
    132 => 
    array (
      'from' => '<basepath>/custom/include/SugarFields/Fields/Phone/ListView.tpl',
      'to' => 'custom/include/SugarFields/Fields/Phone/ListView.tpl',
    ),
    133 => 
    array (
      'from' => '<basepath>/custom/include/SugarFields/Fields/Phone/SugarFieldPhone.php',
      'to' => 'custom/include/SugarFields/Fields/Phone/SugarFieldPhone.php',
    ),
    134 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ad.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ad.png',
    ),
    135 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ae.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ae.png',
    ),
    136 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/af.png',
      'to' => 'custom/include/lib/jquery/icons/regions/af.png',
    ),
    137 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ag.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ag.png',
    ),
    138 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ai.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ai.png',
    ),
    139 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/al.png',
      'to' => 'custom/include/lib/jquery/icons/regions/al.png',
    ),
    140 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/am.png',
      'to' => 'custom/include/lib/jquery/icons/regions/am.png',
    ),
    141 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/an.png',
      'to' => 'custom/include/lib/jquery/icons/regions/an.png',
    ),
    142 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ao.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ao.png',
    ),
    143 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ar.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ar.png',
    ),
    144 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/as.png',
      'to' => 'custom/include/lib/jquery/icons/regions/as.png',
    ),
    145 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/at.png',
      'to' => 'custom/include/lib/jquery/icons/regions/at.png',
    ),
    146 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/au.png',
      'to' => 'custom/include/lib/jquery/icons/regions/au.png',
    ),
    147 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/aw.png',
      'to' => 'custom/include/lib/jquery/icons/regions/aw.png',
    ),
    148 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ax.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ax.png',
    ),
    149 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/az.png',
      'to' => 'custom/include/lib/jquery/icons/regions/az.png',
    ),
    150 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ba.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ba.png',
    ),
    151 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bb.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bb.png',
    ),
    152 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bd.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bd.png',
    ),
    153 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/be.png',
      'to' => 'custom/include/lib/jquery/icons/regions/be.png',
    ),
    154 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bf.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bf.png',
    ),
    155 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bg.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bg.png',
    ),
    156 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bh.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bh.png',
    ),
    157 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bi.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bi.png',
    ),
    158 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bj.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bj.png',
    ),
    159 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bm.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bm.png',
    ),
    160 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bn.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bn.png',
    ),
    161 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bo.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bo.png',
    ),
    162 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/br.png',
      'to' => 'custom/include/lib/jquery/icons/regions/br.png',
    ),
    163 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bs.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bs.png',
    ),
    164 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bt.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bt.png',
    ),
    165 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bv.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bv.png',
    ),
    166 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bw.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bw.png',
    ),
    167 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/by.png',
      'to' => 'custom/include/lib/jquery/icons/regions/by.png',
    ),
    168 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/bz.png',
      'to' => 'custom/include/lib/jquery/icons/regions/bz.png',
    ),
    169 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ca.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ca.png',
    ),
    170 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/catalonia.png',
      'to' => 'custom/include/lib/jquery/icons/regions/catalonia.png',
    ),
    171 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/cc.png',
      'to' => 'custom/include/lib/jquery/icons/regions/cc.png',
    ),
    172 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/cd.png',
      'to' => 'custom/include/lib/jquery/icons/regions/cd.png',
    ),
    173 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/cf.png',
      'to' => 'custom/include/lib/jquery/icons/regions/cf.png',
    ),
    174 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/cg.png',
      'to' => 'custom/include/lib/jquery/icons/regions/cg.png',
    ),
    175 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ch.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ch.png',
    ),
    176 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ci.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ci.png',
    ),
    177 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ck.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ck.png',
    ),
    178 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/cl.png',
      'to' => 'custom/include/lib/jquery/icons/regions/cl.png',
    ),
    179 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/cm.png',
      'to' => 'custom/include/lib/jquery/icons/regions/cm.png',
    ),
    180 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/cn.png',
      'to' => 'custom/include/lib/jquery/icons/regions/cn.png',
    ),
    181 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/co.png',
      'to' => 'custom/include/lib/jquery/icons/regions/co.png',
    ),
    182 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/cr.png',
      'to' => 'custom/include/lib/jquery/icons/regions/cr.png',
    ),
    183 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/cs.png',
      'to' => 'custom/include/lib/jquery/icons/regions/cs.png',
    ),
    184 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/cu.png',
      'to' => 'custom/include/lib/jquery/icons/regions/cu.png',
    ),
    185 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/cv.png',
      'to' => 'custom/include/lib/jquery/icons/regions/cv.png',
    ),
    186 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/cx.png',
      'to' => 'custom/include/lib/jquery/icons/regions/cx.png',
    ),
    187 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/cy.png',
      'to' => 'custom/include/lib/jquery/icons/regions/cy.png',
    ),
    188 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/cz.png',
      'to' => 'custom/include/lib/jquery/icons/regions/cz.png',
    ),
    189 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/de.png',
      'to' => 'custom/include/lib/jquery/icons/regions/de.png',
    ),
    190 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/dj.png',
      'to' => 'custom/include/lib/jquery/icons/regions/dj.png',
    ),
    191 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/dk.png',
      'to' => 'custom/include/lib/jquery/icons/regions/dk.png',
    ),
    192 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/dm.png',
      'to' => 'custom/include/lib/jquery/icons/regions/dm.png',
    ),
    193 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/do.png',
      'to' => 'custom/include/lib/jquery/icons/regions/do.png',
    ),
    194 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/dz.png',
      'to' => 'custom/include/lib/jquery/icons/regions/dz.png',
    ),
    195 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ec.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ec.png',
    ),
    196 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ee.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ee.png',
    ),
    197 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/eg.png',
      'to' => 'custom/include/lib/jquery/icons/regions/eg.png',
    ),
    198 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/eh.png',
      'to' => 'custom/include/lib/jquery/icons/regions/eh.png',
    ),
    199 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/england.png',
      'to' => 'custom/include/lib/jquery/icons/regions/england.png',
    ),
    200 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/er.png',
      'to' => 'custom/include/lib/jquery/icons/regions/er.png',
    ),
    201 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/es.png',
      'to' => 'custom/include/lib/jquery/icons/regions/es.png',
    ),
    202 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/et.png',
      'to' => 'custom/include/lib/jquery/icons/regions/et.png',
    ),
    203 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/europeanunion.png',
      'to' => 'custom/include/lib/jquery/icons/regions/europeanunion.png',
    ),
    204 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/fam.png',
      'to' => 'custom/include/lib/jquery/icons/regions/fam.png',
    ),
    205 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/fi.png',
      'to' => 'custom/include/lib/jquery/icons/regions/fi.png',
    ),
    206 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/fj.png',
      'to' => 'custom/include/lib/jquery/icons/regions/fj.png',
    ),
    207 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/fk.png',
      'to' => 'custom/include/lib/jquery/icons/regions/fk.png',
    ),
    208 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/fm.png',
      'to' => 'custom/include/lib/jquery/icons/regions/fm.png',
    ),
    209 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/fo.png',
      'to' => 'custom/include/lib/jquery/icons/regions/fo.png',
    ),
    210 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/fr.png',
      'to' => 'custom/include/lib/jquery/icons/regions/fr.png',
    ),
    211 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ga.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ga.png',
    ),
    212 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gb.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gb.png',
    ),
    213 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gd.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gd.png',
    ),
    214 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ge.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ge.png',
    ),
    215 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gf.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gf.png',
    ),
    216 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gh.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gh.png',
    ),
    217 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gi.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gi.png',
    ),
    218 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gl.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gl.png',
    ),
    219 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gm.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gm.png',
    ),
    220 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gn.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gn.png',
    ),
    221 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gp.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gp.png',
    ),
    222 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gq.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gq.png',
    ),
    223 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gr.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gr.png',
    ),
    224 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gs.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gs.png',
    ),
    225 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gt.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gt.png',
    ),
    226 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gu.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gu.png',
    ),
    227 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gw.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gw.png',
    ),
    228 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/gy.png',
      'to' => 'custom/include/lib/jquery/icons/regions/gy.png',
    ),
    229 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/hk.png',
      'to' => 'custom/include/lib/jquery/icons/regions/hk.png',
    ),
    230 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/hm.png',
      'to' => 'custom/include/lib/jquery/icons/regions/hm.png',
    ),
    231 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/hn.png',
      'to' => 'custom/include/lib/jquery/icons/regions/hn.png',
    ),
    232 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/hr.png',
      'to' => 'custom/include/lib/jquery/icons/regions/hr.png',
    ),
    233 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ht.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ht.png',
    ),
    234 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/hu.png',
      'to' => 'custom/include/lib/jquery/icons/regions/hu.png',
    ),
    235 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/id.png',
      'to' => 'custom/include/lib/jquery/icons/regions/id.png',
    ),
    236 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ie.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ie.png',
    ),
    237 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/il.png',
      'to' => 'custom/include/lib/jquery/icons/regions/il.png',
    ),
    238 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/in.png',
      'to' => 'custom/include/lib/jquery/icons/regions/in.png',
    ),
    239 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/io.png',
      'to' => 'custom/include/lib/jquery/icons/regions/io.png',
    ),
    240 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/iq.png',
      'to' => 'custom/include/lib/jquery/icons/regions/iq.png',
    ),
    241 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ir.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ir.png',
    ),
    242 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/is.png',
      'to' => 'custom/include/lib/jquery/icons/regions/is.png',
    ),
    243 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/it.png',
      'to' => 'custom/include/lib/jquery/icons/regions/it.png',
    ),
    244 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/jm.png',
      'to' => 'custom/include/lib/jquery/icons/regions/jm.png',
    ),
    245 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/jo.png',
      'to' => 'custom/include/lib/jquery/icons/regions/jo.png',
    ),
    246 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/jp.png',
      'to' => 'custom/include/lib/jquery/icons/regions/jp.png',
    ),
    247 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ke.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ke.png',
    ),
    248 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/kg.png',
      'to' => 'custom/include/lib/jquery/icons/regions/kg.png',
    ),
    249 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/kh.png',
      'to' => 'custom/include/lib/jquery/icons/regions/kh.png',
    ),
    250 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ki.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ki.png',
    ),
    251 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/km.png',
      'to' => 'custom/include/lib/jquery/icons/regions/km.png',
    ),
    252 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/kn.png',
      'to' => 'custom/include/lib/jquery/icons/regions/kn.png',
    ),
    253 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/kp.png',
      'to' => 'custom/include/lib/jquery/icons/regions/kp.png',
    ),
    254 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/kr.png',
      'to' => 'custom/include/lib/jquery/icons/regions/kr.png',
    ),
    255 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/kw.png',
      'to' => 'custom/include/lib/jquery/icons/regions/kw.png',
    ),
    256 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ky.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ky.png',
    ),
    257 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/kz.png',
      'to' => 'custom/include/lib/jquery/icons/regions/kz.png',
    ),
    258 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/la.png',
      'to' => 'custom/include/lib/jquery/icons/regions/la.png',
    ),
    259 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/lb.png',
      'to' => 'custom/include/lib/jquery/icons/regions/lb.png',
    ),
    260 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/lc.png',
      'to' => 'custom/include/lib/jquery/icons/regions/lc.png',
    ),
    261 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/li.png',
      'to' => 'custom/include/lib/jquery/icons/regions/li.png',
    ),
    262 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/lk.png',
      'to' => 'custom/include/lib/jquery/icons/regions/lk.png',
    ),
    263 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/lr.png',
      'to' => 'custom/include/lib/jquery/icons/regions/lr.png',
    ),
    264 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ls.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ls.png',
    ),
    265 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/lt.png',
      'to' => 'custom/include/lib/jquery/icons/regions/lt.png',
    ),
    266 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/lu.png',
      'to' => 'custom/include/lib/jquery/icons/regions/lu.png',
    ),
    267 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/lv.png',
      'to' => 'custom/include/lib/jquery/icons/regions/lv.png',
    ),
    268 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ly.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ly.png',
    ),
    269 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ma.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ma.png',
    ),
    270 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mc.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mc.png',
    ),
    271 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/md.png',
      'to' => 'custom/include/lib/jquery/icons/regions/md.png',
    ),
    272 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/me.png',
      'to' => 'custom/include/lib/jquery/icons/regions/me.png',
    ),
    273 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mg.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mg.png',
    ),
    274 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mh.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mh.png',
    ),
    275 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mk.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mk.png',
    ),
    276 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ml.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ml.png',
    ),
    277 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mm.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mm.png',
    ),
    278 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mn.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mn.png',
    ),
    279 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mo.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mo.png',
    ),
    280 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mp.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mp.png',
    ),
    281 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mq.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mq.png',
    ),
    282 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mr.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mr.png',
    ),
    283 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ms.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ms.png',
    ),
    284 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mt.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mt.png',
    ),
    285 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mu.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mu.png',
    ),
    286 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mv.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mv.png',
    ),
    287 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mw.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mw.png',
    ),
    288 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mx.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mx.png',
    ),
    289 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/my.png',
      'to' => 'custom/include/lib/jquery/icons/regions/my.png',
    ),
    290 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/mz.png',
      'to' => 'custom/include/lib/jquery/icons/regions/mz.png',
    ),
    291 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/na.png',
      'to' => 'custom/include/lib/jquery/icons/regions/na.png',
    ),
    292 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/nc.png',
      'to' => 'custom/include/lib/jquery/icons/regions/nc.png',
    ),
    293 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ne.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ne.png',
    ),
    294 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/nf.png',
      'to' => 'custom/include/lib/jquery/icons/regions/nf.png',
    ),
    295 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ng.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ng.png',
    ),
    296 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ni.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ni.png',
    ),
    297 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/nl.png',
      'to' => 'custom/include/lib/jquery/icons/regions/nl.png',
    ),
    298 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/no.png',
      'to' => 'custom/include/lib/jquery/icons/regions/no.png',
    ),
    299 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/np.png',
      'to' => 'custom/include/lib/jquery/icons/regions/np.png',
    ),
    300 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/nr.png',
      'to' => 'custom/include/lib/jquery/icons/regions/nr.png',
    ),
    301 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/nu.png',
      'to' => 'custom/include/lib/jquery/icons/regions/nu.png',
    ),
    302 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/nz.png',
      'to' => 'custom/include/lib/jquery/icons/regions/nz.png',
    ),
    303 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/om.png',
      'to' => 'custom/include/lib/jquery/icons/regions/om.png',
    ),
    304 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/pa.png',
      'to' => 'custom/include/lib/jquery/icons/regions/pa.png',
    ),
    305 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/pe.png',
      'to' => 'custom/include/lib/jquery/icons/regions/pe.png',
    ),
    306 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/pf.png',
      'to' => 'custom/include/lib/jquery/icons/regions/pf.png',
    ),
    307 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/pg.png',
      'to' => 'custom/include/lib/jquery/icons/regions/pg.png',
    ),
    308 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ph.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ph.png',
    ),
    309 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/pk.png',
      'to' => 'custom/include/lib/jquery/icons/regions/pk.png',
    ),
    310 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/pl.png',
      'to' => 'custom/include/lib/jquery/icons/regions/pl.png',
    ),
    311 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/pm.png',
      'to' => 'custom/include/lib/jquery/icons/regions/pm.png',
    ),
    312 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/pn.png',
      'to' => 'custom/include/lib/jquery/icons/regions/pn.png',
    ),
    313 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/pr.png',
      'to' => 'custom/include/lib/jquery/icons/regions/pr.png',
    ),
    314 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ps.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ps.png',
    ),
    315 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/pt.png',
      'to' => 'custom/include/lib/jquery/icons/regions/pt.png',
    ),
    316 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/pw.png',
      'to' => 'custom/include/lib/jquery/icons/regions/pw.png',
    ),
    317 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/py.png',
      'to' => 'custom/include/lib/jquery/icons/regions/py.png',
    ),
    318 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/qa.png',
      'to' => 'custom/include/lib/jquery/icons/regions/qa.png',
    ),
    319 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/re.png',
      'to' => 'custom/include/lib/jquery/icons/regions/re.png',
    ),
    320 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ro.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ro.png',
    ),
    321 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/rs.png',
      'to' => 'custom/include/lib/jquery/icons/regions/rs.png',
    ),
    322 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ru.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ru.png',
    ),
    323 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/rw.png',
      'to' => 'custom/include/lib/jquery/icons/regions/rw.png',
    ),
    324 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sa.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sa.png',
    ),
    325 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sb.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sb.png',
    ),
    326 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sc.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sc.png',
    ),
    327 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/scotland.png',
      'to' => 'custom/include/lib/jquery/icons/regions/scotland.png',
    ),
    328 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sd.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sd.png',
    ),
    329 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/se.png',
      'to' => 'custom/include/lib/jquery/icons/regions/se.png',
    ),
    330 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sg.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sg.png',
    ),
    331 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sh.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sh.png',
    ),
    332 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/si.png',
      'to' => 'custom/include/lib/jquery/icons/regions/si.png',
    ),
    333 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sj.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sj.png',
    ),
    334 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sk.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sk.png',
    ),
    335 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sl.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sl.png',
    ),
    336 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sm.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sm.png',
    ),
    337 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sn.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sn.png',
    ),
    338 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/so.png',
      'to' => 'custom/include/lib/jquery/icons/regions/so.png',
    ),
    339 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sr.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sr.png',
    ),
    340 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/st.png',
      'to' => 'custom/include/lib/jquery/icons/regions/st.png',
    ),
    341 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sv.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sv.png',
    ),
    342 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sy.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sy.png',
    ),
    343 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/sz.png',
      'to' => 'custom/include/lib/jquery/icons/regions/sz.png',
    ),
    344 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/tc.png',
      'to' => 'custom/include/lib/jquery/icons/regions/tc.png',
    ),
    345 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/td.png',
      'to' => 'custom/include/lib/jquery/icons/regions/td.png',
    ),
    346 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/tf.png',
      'to' => 'custom/include/lib/jquery/icons/regions/tf.png',
    ),
    347 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/tg.png',
      'to' => 'custom/include/lib/jquery/icons/regions/tg.png',
    ),
    348 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/th.png',
      'to' => 'custom/include/lib/jquery/icons/regions/th.png',
    ),
    349 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/tj.png',
      'to' => 'custom/include/lib/jquery/icons/regions/tj.png',
    ),
    350 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/tk.png',
      'to' => 'custom/include/lib/jquery/icons/regions/tk.png',
    ),
    351 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/tl.png',
      'to' => 'custom/include/lib/jquery/icons/regions/tl.png',
    ),
    352 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/tm.png',
      'to' => 'custom/include/lib/jquery/icons/regions/tm.png',
    ),
    353 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/tn.png',
      'to' => 'custom/include/lib/jquery/icons/regions/tn.png',
    ),
    354 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/to.png',
      'to' => 'custom/include/lib/jquery/icons/regions/to.png',
    ),
    355 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/tr.png',
      'to' => 'custom/include/lib/jquery/icons/regions/tr.png',
    ),
    356 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/tt.png',
      'to' => 'custom/include/lib/jquery/icons/regions/tt.png',
    ),
    357 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/tv.png',
      'to' => 'custom/include/lib/jquery/icons/regions/tv.png',
    ),
    358 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/tw.png',
      'to' => 'custom/include/lib/jquery/icons/regions/tw.png',
    ),
    359 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/tz.png',
      'to' => 'custom/include/lib/jquery/icons/regions/tz.png',
    ),
    360 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ua.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ua.png',
    ),
    361 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ug.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ug.png',
    ),
    362 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/um.png',
      'to' => 'custom/include/lib/jquery/icons/regions/um.png',
    ),
    363 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/us.png',
      'to' => 'custom/include/lib/jquery/icons/regions/us.png',
    ),
    364 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/uy.png',
      'to' => 'custom/include/lib/jquery/icons/regions/uy.png',
    ),
    365 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/uz.png',
      'to' => 'custom/include/lib/jquery/icons/regions/uz.png',
    ),
    366 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/va.png',
      'to' => 'custom/include/lib/jquery/icons/regions/va.png',
    ),
    367 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/vc.png',
      'to' => 'custom/include/lib/jquery/icons/regions/vc.png',
    ),
    368 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ve.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ve.png',
    ),
    369 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/vg.png',
      'to' => 'custom/include/lib/jquery/icons/regions/vg.png',
    ),
    370 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/vi.png',
      'to' => 'custom/include/lib/jquery/icons/regions/vi.png',
    ),
    371 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/vn.png',
      'to' => 'custom/include/lib/jquery/icons/regions/vn.png',
    ),
    372 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/vu.png',
      'to' => 'custom/include/lib/jquery/icons/regions/vu.png',
    ),
    373 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/wales.png',
      'to' => 'custom/include/lib/jquery/icons/regions/wales.png',
    ),
    374 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/wf.png',
      'to' => 'custom/include/lib/jquery/icons/regions/wf.png',
    ),
    375 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ws.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ws.png',
    ),
    376 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/ye.png',
      'to' => 'custom/include/lib/jquery/icons/regions/ye.png',
    ),
    377 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/yt.png',
      'to' => 'custom/include/lib/jquery/icons/regions/yt.png',
    ),
    378 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/za.png',
      'to' => 'custom/include/lib/jquery/icons/regions/za.png',
    ),
    379 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/zm.png',
      'to' => 'custom/include/lib/jquery/icons/regions/zm.png',
    ),
    380 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/icons/regions/zw.png',
      'to' => 'custom/include/lib/jquery/icons/regions/zw.png',
    ),
    381 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/index.html',
      'to' => 'custom/include/lib/jquery/index.html',
    ),
    382 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/jquery.dropdown.css',
      'to' => 'custom/include/lib/jquery/jquery.dropdown.css',
    ),
    383 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/jquery.dropdown.js',
      'to' => 'custom/include/lib/jquery/jquery.dropdown.js',
    ),
    384 => 
    array (
      'from' => '<basepath>/custom/include/lib/jquery/readme.md',
      'to' => 'custom/include/lib/jquery/readme.md',
    ),
    385 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_800.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_800.php',
    ),
    386 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_979.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_979.php',
    ),
    387 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_AD.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_AD.php',
    ),
    388 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_AO.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_AO.php',
    ),
    389 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_AR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_AR.php',
    ),
    390 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_AU.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_AU.php',
    ),
    391 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_BR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_BR.php',
    ),
    392 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_BS.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_BS.php',
    ),
    393 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_BY.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_BY.php',
    ),
    394 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_DE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_DE.php',
    ),
    395 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_GB.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_GB.php',
    ),
    396 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_IN.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_IN.php',
    ),
    397 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_IT.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_IT.php',
    ),
    398 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_JP.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_JP.php',
    ),
    399 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_KR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_KR.php',
    ),
    400 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_MX.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_MX.php',
    ),
    401 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_NZ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_NZ.php',
    ),
    402 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_PL.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_PL.php',
    ),
    403 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_RE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_RE.php',
    ),
    404 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_SG.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_SG.php',
    ),
    405 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_US.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_US.php',
    ),
    406 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_YT.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadataForTesting_YT.php',
    ),
    407 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_800.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_800.php',
    ),
    408 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_808.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_808.php',
    ),
    409 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_870.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_870.php',
    ),
    410 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_878.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_878.php',
    ),
    411 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_881.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_881.php',
    ),
    412 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_882.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_882.php',
    ),
    413 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_883.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_883.php',
    ),
    414 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_888.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_888.php',
    ),
    415 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_979.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_979.php',
    ),
    416 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AC.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AC.php',
    ),
    417 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AD.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AD.php',
    ),
    418 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AE.php',
    ),
    419 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AF.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AF.php',
    ),
    420 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AG.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AG.php',
    ),
    421 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AI.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AI.php',
    ),
    422 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AL.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AL.php',
    ),
    423 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AM.php',
    ),
    424 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AN.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AN.php',
    ),
    425 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AO.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AO.php',
    ),
    426 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AR.php',
    ),
    427 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AS.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AS.php',
    ),
    428 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AT.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AT.php',
    ),
    429 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AU.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AU.php',
    ),
    430 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AW.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AW.php',
    ),
    431 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AX.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AX.php',
    ),
    432 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AZ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_AZ.php',
    ),
    433 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BA.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BA.php',
    ),
    434 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BB.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BB.php',
    ),
    435 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BD.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BD.php',
    ),
    436 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BE.php',
    ),
    437 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BF.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BF.php',
    ),
    438 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BG.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BG.php',
    ),
    439 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BH.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BH.php',
    ),
    440 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BI.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BI.php',
    ),
    441 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BJ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BJ.php',
    ),
    442 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BL.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BL.php',
    ),
    443 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BM.php',
    ),
    444 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BN.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BN.php',
    ),
    445 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BO.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BO.php',
    ),
    446 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BQ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BQ.php',
    ),
    447 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BR.php',
    ),
    448 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BS.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BS.php',
    ),
    449 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BT.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BT.php',
    ),
    450 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BW.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BW.php',
    ),
    451 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BY.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BY.php',
    ),
    452 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BZ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_BZ.php',
    ),
    453 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CA.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CA.php',
    ),
    454 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CC.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CC.php',
    ),
    455 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CD.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CD.php',
    ),
    456 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CF.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CF.php',
    ),
    457 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CG.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CG.php',
    ),
    458 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CH.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CH.php',
    ),
    459 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CI.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CI.php',
    ),
    460 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CK.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CK.php',
    ),
    461 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CL.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CL.php',
    ),
    462 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CM.php',
    ),
    463 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CN.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CN.php',
    ),
    464 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CO.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CO.php',
    ),
    465 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CR.php',
    ),
    466 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CU.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CU.php',
    ),
    467 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CV.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CV.php',
    ),
    468 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CW.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CW.php',
    ),
    469 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CX.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CX.php',
    ),
    470 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CY.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CY.php',
    ),
    471 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CZ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_CZ.php',
    ),
    472 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_DE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_DE.php',
    ),
    473 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_DJ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_DJ.php',
    ),
    474 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_DK.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_DK.php',
    ),
    475 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_DM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_DM.php',
    ),
    476 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_DO.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_DO.php',
    ),
    477 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_DZ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_DZ.php',
    ),
    478 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_EC.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_EC.php',
    ),
    479 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_EE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_EE.php',
    ),
    480 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_EG.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_EG.php',
    ),
    481 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ER.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ER.php',
    ),
    482 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ES.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ES.php',
    ),
    483 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ET.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ET.php',
    ),
    484 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_FI.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_FI.php',
    ),
    485 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_FJ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_FJ.php',
    ),
    486 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_FK.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_FK.php',
    ),
    487 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_FM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_FM.php',
    ),
    488 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_FO.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_FO.php',
    ),
    489 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_FR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_FR.php',
    ),
    490 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GA.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GA.php',
    ),
    491 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GB.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GB.php',
    ),
    492 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GD.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GD.php',
    ),
    493 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GE.php',
    ),
    494 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GF.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GF.php',
    ),
    495 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GG.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GG.php',
    ),
    496 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GH.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GH.php',
    ),
    497 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GI.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GI.php',
    ),
    498 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GL.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GL.php',
    ),
    499 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GM.php',
    ),
    500 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GN.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GN.php',
    ),
    501 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GP.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GP.php',
    ),
    502 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GQ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GQ.php',
    ),
    503 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GR.php',
    ),
    504 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GT.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GT.php',
    ),
    505 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GU.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GU.php',
    ),
    506 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GW.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GW.php',
    ),
    507 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GY.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_GY.php',
    ),
    508 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_HK.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_HK.php',
    ),
    509 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_HN.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_HN.php',
    ),
    510 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_HR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_HR.php',
    ),
    511 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_HT.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_HT.php',
    ),
    512 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_HU.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_HU.php',
    ),
    513 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ID.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ID.php',
    ),
    514 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IE.php',
    ),
    515 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IL.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IL.php',
    ),
    516 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IM.php',
    ),
    517 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IN.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IN.php',
    ),
    518 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IO.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IO.php',
    ),
    519 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IQ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IQ.php',
    ),
    520 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IR.php',
    ),
    521 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IS.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IS.php',
    ),
    522 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IT.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_IT.php',
    ),
    523 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_JE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_JE.php',
    ),
    524 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_JM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_JM.php',
    ),
    525 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_JO.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_JO.php',
    ),
    526 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_JP.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_JP.php',
    ),
    527 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KE.php',
    ),
    528 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KG.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KG.php',
    ),
    529 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KH.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KH.php',
    ),
    530 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KI.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KI.php',
    ),
    531 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KM.php',
    ),
    532 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KN.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KN.php',
    ),
    533 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KP.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KP.php',
    ),
    534 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KR.php',
    ),
    535 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KW.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KW.php',
    ),
    536 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KY.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KY.php',
    ),
    537 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KZ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_KZ.php',
    ),
    538 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LA.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LA.php',
    ),
    539 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LB.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LB.php',
    ),
    540 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LC.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LC.php',
    ),
    541 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LI.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LI.php',
    ),
    542 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LK.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LK.php',
    ),
    543 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LR.php',
    ),
    544 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LS.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LS.php',
    ),
    545 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LT.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LT.php',
    ),
    546 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LU.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LU.php',
    ),
    547 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LV.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LV.php',
    ),
    548 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LY.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_LY.php',
    ),
    549 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MA.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MA.php',
    ),
    550 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MC.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MC.php',
    ),
    551 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MD.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MD.php',
    ),
    552 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ME.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ME.php',
    ),
    553 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MF.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MF.php',
    ),
    554 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MG.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MG.php',
    ),
    555 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MH.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MH.php',
    ),
    556 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MK.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MK.php',
    ),
    557 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ML.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ML.php',
    ),
    558 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MM.php',
    ),
    559 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MN.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MN.php',
    ),
    560 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MO.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MO.php',
    ),
    561 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MP.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MP.php',
    ),
    562 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MQ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MQ.php',
    ),
    563 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MR.php',
    ),
    564 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MS.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MS.php',
    ),
    565 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MT.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MT.php',
    ),
    566 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MU.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MU.php',
    ),
    567 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MV.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MV.php',
    ),
    568 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MW.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MW.php',
    ),
    569 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MX.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MX.php',
    ),
    570 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MY.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MY.php',
    ),
    571 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MZ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_MZ.php',
    ),
    572 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NA.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NA.php',
    ),
    573 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NC.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NC.php',
    ),
    574 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NE.php',
    ),
    575 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NF.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NF.php',
    ),
    576 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NG.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NG.php',
    ),
    577 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NI.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NI.php',
    ),
    578 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NL.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NL.php',
    ),
    579 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NO.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NO.php',
    ),
    580 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NP.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NP.php',
    ),
    581 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NR.php',
    ),
    582 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NU.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NU.php',
    ),
    583 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NZ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_NZ.php',
    ),
    584 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_OM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_OM.php',
    ),
    585 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PA.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PA.php',
    ),
    586 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PE.php',
    ),
    587 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PF.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PF.php',
    ),
    588 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PG.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PG.php',
    ),
    589 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PH.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PH.php',
    ),
    590 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PK.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PK.php',
    ),
    591 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PL.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PL.php',
    ),
    592 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PM.php',
    ),
    593 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PR.php',
    ),
    594 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PS.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PS.php',
    ),
    595 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PT.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PT.php',
    ),
    596 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PW.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PW.php',
    ),
    597 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PY.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_PY.php',
    ),
    598 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_QA.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_QA.php',
    ),
    599 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_RE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_RE.php',
    ),
    600 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_RO.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_RO.php',
    ),
    601 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_RS.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_RS.php',
    ),
    602 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_RU.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_RU.php',
    ),
    603 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_RW.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_RW.php',
    ),
    604 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SA.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SA.php',
    ),
    605 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SB.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SB.php',
    ),
    606 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SC.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SC.php',
    ),
    607 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SD.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SD.php',
    ),
    608 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SE.php',
    ),
    609 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SG.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SG.php',
    ),
    610 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SH.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SH.php',
    ),
    611 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SI.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SI.php',
    ),
    612 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SJ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SJ.php',
    ),
    613 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SK.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SK.php',
    ),
    614 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SL.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SL.php',
    ),
    615 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SM.php',
    ),
    616 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SN.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SN.php',
    ),
    617 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SO.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SO.php',
    ),
    618 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SR.php',
    ),
    619 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SS.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SS.php',
    ),
    620 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ST.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ST.php',
    ),
    621 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SV.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SV.php',
    ),
    622 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SX.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SX.php',
    ),
    623 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SY.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SY.php',
    ),
    624 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SZ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_SZ.php',
    ),
    625 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TC.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TC.php',
    ),
    626 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TD.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TD.php',
    ),
    627 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TG.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TG.php',
    ),
    628 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TH.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TH.php',
    ),
    629 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TJ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TJ.php',
    ),
    630 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TK.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TK.php',
    ),
    631 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TL.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TL.php',
    ),
    632 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TM.php',
    ),
    633 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TN.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TN.php',
    ),
    634 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TO.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TO.php',
    ),
    635 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TR.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TR.php',
    ),
    636 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TT.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TT.php',
    ),
    637 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TV.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TV.php',
    ),
    638 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TW.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TW.php',
    ),
    639 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TZ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_TZ.php',
    ),
    640 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_UA.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_UA.php',
    ),
    641 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_UG.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_UG.php',
    ),
    642 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_US.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_US.php',
    ),
    643 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_UY.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_UY.php',
    ),
    644 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_UZ.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_UZ.php',
    ),
    645 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_VA.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_VA.php',
    ),
    646 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_VC.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_VC.php',
    ),
    647 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_VE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_VE.php',
    ),
    648 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_VG.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_VG.php',
    ),
    649 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_VI.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_VI.php',
    ),
    650 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_VN.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_VN.php',
    ),
    651 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_VU.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_VU.php',
    ),
    652 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_WF.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_WF.php',
    ),
    653 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_WS.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_WS.php',
    ),
    654 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_YE.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_YE.php',
    ),
    655 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_YT.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_YT.php',
    ),
    656 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ZA.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ZA.php',
    ),
    657 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ZM.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ZM.php',
    ),
    658 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ZW.php',
      'to' => 'custom/include/lib/phonenumbers/data/PhoneNumberMetadata_ZW.php',
    ),
    659 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/javascript/asyoutypeformatter.js',
      'to' => 'custom/include/lib/phonenumbers/javascript/asyoutypeformatter.js',
    ),
    660 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/javascript/asyoutypeformatter_test.html',
      'to' => 'custom/include/lib/phonenumbers/javascript/asyoutypeformatter_test.html',
    ),
    661 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/javascript/asyoutypeformatter_test.js',
      'to' => 'custom/include/lib/phonenumbers/javascript/asyoutypeformatter_test.js',
    ),
    662 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/javascript/demo.html',
      'to' => 'custom/include/lib/phonenumbers/javascript/demo.html',
    ),
    663 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/javascript/google_base.js',
      'to' => 'custom/include/lib/phonenumbers/javascript/google_base.js',
    ),
    664 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/javascript/metadata.js',
      'to' => 'custom/include/lib/phonenumbers/javascript/metadata.js',
    ),
    665 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/javascript/metadatafortesting.js',
      'to' => 'custom/include/lib/phonenumbers/javascript/metadatafortesting.js',
    ),
    666 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/javascript/metadatalite.js',
      'to' => 'custom/include/lib/phonenumbers/javascript/metadatalite.js',
    ),
    667 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/javascript/phonemetadata.pb.js',
      'to' => 'custom/include/lib/phonenumbers/javascript/phonemetadata.pb.js',
    ),
    668 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/javascript/phonenumber.pb.js',
      'to' => 'custom/include/lib/phonenumbers/javascript/phonenumber.pb.js',
    ),
    669 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/javascript/phonenumberutil.js',
      'to' => 'custom/include/lib/phonenumbers/javascript/phonenumberutil.js',
    ),
    670 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/javascript/phonenumberutil_test.html',
      'to' => 'custom/include/lib/phonenumbers/javascript/phonenumberutil_test.html',
    ),
    671 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/javascript/phonenumberutil_test.js',
      'to' => 'custom/include/lib/phonenumbers/javascript/phonenumberutil_test.js',
    ),
    672 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/javascript/regioncodefortesting.js',
      'to' => 'custom/include/lib/phonenumbers/javascript/regioncodefortesting.js',
    ),
    673 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/CountryCodeToRegionCodeMap.php',
      'to' => 'custom/include/lib/phonenumbers/CountryCodeToRegionCodeMap.php',
    ),
    674 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/CountryCodeToRegionCodeMapForTesting.php',
      'to' => 'custom/include/lib/phonenumbers/CountryCodeToRegionCodeMapForTesting.php',
    ),
    675 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/NumberParseException.php',
      'to' => 'custom/include/lib/phonenumbers/NumberParseException.php',
    ),
    676 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/PhoneMetadata.php',
      'to' => 'custom/include/lib/phonenumbers/PhoneMetadata.php',
    ),
    677 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/PhoneNumber.php',
      'to' => 'custom/include/lib/phonenumbers/PhoneNumber.php',
    ),
    678 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/PhoneNumberUtil.php',
      'to' => 'custom/include/lib/phonenumbers/PhoneNumberUtil.php',
    ),
    679 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/README.md',
      'to' => 'custom/include/lib/phonenumbers/README.md',
    ),
    680 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/RegionCode.php',
      'to' => 'custom/include/lib/phonenumbers/RegionCode.php',
    ),
    681 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/build.xml',
      'to' => 'custom/include/lib/phonenumbers/build.xml',
    ),
    682 => 
    array (
      'from' => '<basepath>/custom/include/lib/phonenumbers/demo.php',
      'to' => 'custom/include/lib/phonenumbers/demo.php',
    ),
    683 => 
    array (
      'from' => '<basepath>/custom/themes/Sugar/tpls/_head.tpl',
      'to' => 'custom/themes/Sugar/tpls/_head.tpl',
    ),
    684 => 
    array (
      'from' => '<basepath>/custom/modules/LogicHookClass.php',
      'to' => 'custom/modules/LogicHookClass.php',
    ),
    685 => 
    array (
      'from' => '<basepath>/custom/modules/logic_hooks.php',
      'to' => 'custom/modules/logic_hooks.php',
    ),
  ),
);
?>