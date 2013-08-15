{*
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



