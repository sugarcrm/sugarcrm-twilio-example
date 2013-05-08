{*
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2011 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

/*********************************************************************************
* Description:
* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
* Reserved. Contributor(s): contact@synolia.com - www.synolia.com
* *******************************************************************************/
*}

<div style="visibility:hidden;" id="twitter_popup_div"></div>
<script type="text/javascript" src="{sugar_getjspath file='include/connectors/formatters/default/company_detail.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='custom/modules/Connectors/connectors/formatters/ext/rest/twilio/twilio.js'}"></script>
<script type="text/javascript">
{{$DROPDOWN_JAVASCRIPT}}

{literal} 
         
function show_ext_rest_twilio(event, twilio_img)
{
    phone_number = '';
    phone_number_e164 = '';
          //console.log($(haha).prev().prop('tagName'));
    if($(twilio_img).prev().prop('tagName') == 'A'){
        //console.log('aaaa' + $.trim($(twilio_img).prev().text()) + 'bbbb');  
        phone_number = $.trim($(twilio_img).prev().text());
    }else{
        //console.log('aaaa' + $.trim($(twilio_img).parent().clone().children().remove().end().text()) + 'bbbb') ;
        phone_number = $.trim($(twilio_img).parent().clone().children().remove().end().text())
    }
    
    regionCode = '{/literal}{{$DEFAULT_REGION}}{literal}';
        
    try{
        var phoneUtil = i18n.phonenumbers.PhoneNumberUtil.getInstance();                    
        var number = phoneUtil.parseAndKeepRawInput(phone_number, regionCode);

        if(phoneUtil.isValidNumber(number)){
            var PNF = i18n.phonenumbers.PhoneNumberFormat;
            var formatted_phone_number = phoneUtil.format(number, PNF.NATIONAL);
            
            var real_regionCode = phoneUtil.getRegionCodeForNumber(number)
            var countryCode = phoneUtil.getCountryCodeForRegion(real_regionCode);

            phone_number = "+" + countryCode + " " + formatted_phone_number;
            phone_number_e164 = phoneUtil.format(number, PNF.E164);
                //console.log('xxxxx====>'+phone_number_e164);
            

        }else{                    
            alert('This might be an invalid phone number, please correct it!');

            return false;
        }
    }catch (e) {

        alert('This might be an invalid phone number, please correct it!');
        return false;
    }
        
    var xCoordinate = event.clientX;
    var yCoordinate = event.clientY;
    var isIE = document.all?true:false;
      
    if(isIE) 
    {
        xCoordinate = xCoordinate + document.body.scrollLeft;
        yCoordinate = yCoordinate + document.body.scrollTop;
    }
        
    //document.getElementById('recipient_phone_number').value = phone_number;
    
{/literal}

    cd = new CompanyDetailsDialog("twilio_popup_div", '<div id="twilio_div" name="twilio_div">' + SUGAR.language.get('app_strings', 'LBL_TWITTER_DATA_LOADING') + '</div>', xCoordinate, yCoordinate);
    cd.setHeader("Calling: "+phone_number);
    cd.text = "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"250\">"
        +"<tr>"
        +"    <td>Please select which phone number you would like to connect this call with.</td>"
        +"</tr>"
        +"<tr>"
        +"    <td><select id=\"user_phone_number\"></select><input id=\"recipient_phone_number\" type=\"hidden\" value=\""+phone_number_e164+"\" /></td>"
        +"</tr>"
        +"<tr>"
        +"    <td><button id=\"twilio_outboundCall\" style=\"button\" onclick=\"twilio_outboundCall();\">Connect</button></td>"
        +"</tr>"
    +"</table>";
    cd.display();
{literal} 
    var selectEl = document.getElementById('user_phone_number'); 
    
    for(number_key in dropdown_option){
        var optionEl = document.createElement('option');
        optionEl.text = dropdown_option[number_key];
        optionEl.value = number_key;
        try{
            selectEl.add(optionEl, null);
        }catch(exception){
            selectEl.add(optionEl);
        }	
    }                  
        
{/literal}       
    
}

</script>



