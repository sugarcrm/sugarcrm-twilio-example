<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


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

	

$connector_strings = array (
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><br />De waarden voor de API en Secret Keys ontvangt u van LinkedIn&#169; door de Sugarinstallatie te registeren als nieuwe applicatie.<br/><br><br /><br />Neem deze stappen om de applicatie te registreren:<br/><br/><br /><br /><ol><li>Ga naar de LinkedIn&#169; Developers site: <a href=&#39;https://www.linkedin.com/secure/developer&#39; target=&#39;_blank&#39;>https://www.linkedin.com/secure/developer</a>.</li><br /><br /><li>Log in met het LinkedIn&#169; account waaronder je de applicatie wil registeren.</li><br /><br /><li>Klik op de "Add New Application" link.</li><br /><br /><li>Vul het "Add New Application" formulier in.</li><br /><br /><li>Selecteer de "Agree" checkbox en klik op "Add Application".</li><br /><br /><li>Zoek de API en Secret Keys voor de Linkedin&#169; Connector (Admin – Connector - Linkedin&#169;) in de "Application Details" pagina en voer de keys hieronder in.</li><br /><br /><li>Klik op Save.</li></ol><br /><br /></td></tr></table>',
  'oauth_consumer_key' => 'API Key',
  'oauth_consumer_secret' => 'Secret Key',
  'company_url' => 'URL',
  'LBL_NAME' => 'Organisatienaam',
);

