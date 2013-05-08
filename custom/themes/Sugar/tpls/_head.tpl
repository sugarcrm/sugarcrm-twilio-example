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
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

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