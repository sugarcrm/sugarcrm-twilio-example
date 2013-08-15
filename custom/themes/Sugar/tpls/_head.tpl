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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html {$langHeader}>
<head>
<link rel="SHORTCUT ICON" href="{$FAVICON_URL}">
<meta http-equiv="Content-Type" content="text/html; charset={$APP.LBL_CHARSET}">
<title>{$SYSTEM_NAME}</title>
{$SUGAR_CSS}

<link rel="stylesheet" type="text/css"  href="custom/include/lib/jquery/jquery.dropdown.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="custom/include/lib/jquery/jquery.dropdown.js"></script>
<script type="text/javascript" src="http://closure-library.googlecode.com/svn/trunk/closure/goog/base.js"></script>
<!-- <script type="text/javascript" src="custom/include/lib/phonenumbers/javascript/google_base.js"></script> -->
<script type="text/javascript">
        goog.require('goog.dom');
        goog.require('goog.json');
        goog.require('goog.proto2.ObjectSerializer');
        goog.require('goog.string.StringBuffer');
</script>
<script type="text/javascript" src="custom/include/lib/phonenumbers/javascript/phonemetadata.pb.js"></script>
<script type="text/javascript" src="custom/include/lib/phonenumbers/javascript/phonenumber.pb.js"></script>
<script type="text/javascript" src="custom/include/lib/phonenumbers/javascript/metadata.js"></script>
<script type="text/javascript" src="custom/include/lib/phonenumbers/javascript/phonenumberutil.js"></script>
<script type="text/javascript" src="custom/include/lib/phonenumbers/javascript/asyoutypeformatter.js"></script>

{if $AUTHENTICATED}
<link rel='stylesheet' href='{sugar_getjspath file="include/ytree/TreeView/css/folders/tree.css"}'/>
<link rel='stylesheet' href='{sugar_getjspath file="include/SugarCharts/Jit/css/base.css"}'/>
{/if}
{$SUGAR_JS}
 
{literal}
<script type="text/javascript">
<!--
SUGAR.themes.theme_name      = '{/literal}{$THEME}{literal}';
SUGAR.themes.hide_image      = '{/literal}{sugar_getimagepath file="hide.gif"}{literal}';
SUGAR.themes.show_image      = '{/literal}{sugar_getimagepath file="show.gif"}{literal}';
SUGAR.themes.loading_image      = '{/literal}{sugar_getimagepath file="img_loading.gif"}{literal}';
if ( YAHOO.env.ua )
    UA = YAHOO.env.ua;
-->


</script>
{/literal}
</head>
