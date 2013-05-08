{*
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
*}
{capture name=getPhone assign=phone}{sugar_fetch object=$parentFieldArray key=$col}{/capture}


{php}

global $sugar_config;
                 
$default_region = "US";

if(isset($sugar_config['phonenumber_default_region']) && !empty($sugar_config['phonenumber_default_region'])){
    $default_region = $sugar_config['phonenumber_default_region'];
}
$this->assign('default_region', $default_region);

$phoneNumberStr = $this->get_template_vars('phone');

$phoneNumberArr = phone_number_national_format($phoneNumberStr, $default_region);  

$this->assign('phone', $phoneNumberArr[0]);

$regionCode = $default_region;
if(isset($phoneNumberArr[1])  && !empty($phoneNumberArr[1])){
    $regionCode = $phoneNumberArr[1];
}

$this->assign('regionCode',strtolower($regionCode)); 

{/php}

{sugar_phone value=$phone usa_format=$usa_format}