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


<form action="index.php" method="post" name="DetailView" id="form">

			<input type="hidden" name="module" value="ACLRoles">
			<input type="hidden" name="user_id" value="">
			<input type="hidden" name="record" value="{$ROLE.id}">
			<input type="hidden" name="isDuplicate" value=''>
			<input type='hidden' name='return_record' value='{$RETURN.record}'>
			<input type='hidden' name='return_action' value='{$RETURN.action}'>
			<input type='hidden' name='return_module' value='{$RETURN.module}'>
			<input type="hidden" name="action">

{php}
    $APP = $this->get_template_vars('APP');
    $this->append('buttons',
    <<<EOD
    <input title="{$APP['LBL_EDIT_BUTTON_TITLE']}" accessKey="{$APP['LBL_EDIT_BUTTON_KEY']}" class="button" onclick="var _form = $('#form')[0]; _form.action.value='EditView'; _form.submit();" type="submit" name="button" value="{$APP['LBL_EDIT_BUTTON']}" />
EOD
    );
    $this->append('buttons',
    <<<EOD
    <input title="{$APP['LBL_DUPLICATE_BUTTON_TITLE']}" accessKey="{$APP['LBL_DUPLICATE_BUTTON_KEY']}" class="button" onclick="this.form.isDuplicate.value='1'; this.form.action.value='EditView'" type="submit" name="button" value=" {$APP['LBL_DUPLICATE_BUTTON']} " />
EOD
    );
    $this->append('buttons',
    <<<EOD
    <input title="{$APP['LBL_DELETE_BUTTON_TITLE']}" accessKey="{$APP['LBL_DELETE_BUTTON_KEY']}" class="button" onclick="this.form.return_module.value='ACLRoles'; this.form.return_action.value='index'; this.form.action.value='Delete'; return confirm('{$APP['NTC_DELETE_CONFIRMATION']}')" type="submit" name="button" value=" {$APP['LBL_DELETE_BUTTON']} " />
EOD
    );
{/php}
            {sugar_action_menu id="userEditActions" class="clickMenu fancymenu" buttons="$buttons"}
		</form>
		</p>
		<p>
		<TABLE width='100%' class='detail view' border='0' cellpadding=0 cellspacing = 1  >
		<TR>
<td valign='top' width='15%' align='right'><b>{$MOD.LBL_NAME}:</b></td><td width='85%' colspan='3'>{$ROLE.name}</td>
</tr
>
<TR>
<td valign='top' width='15%' align='right'><b>{$MOD.LBL_ENABLESOFTPHONE}:</b></td><td width='85%' colspan='3'>

<input class="checkbox" name="enablesoftphone" id="enablesoftphone" disabled="true" type="checkbox" {$CHECKED}>

</td>
</tr>
<TR>
<td valign='top'  width='15%' align='right'><b>{$MOD.LBL_DESCRIPTION}:</b></td><td colspan='3' valign='top'  width='85%' align='left'>{$ROLE.description | nl2br}</td>
</tr></table>
</p>
		<p>

{include file="modules/ACLRoles/EditViewBody.tpl" }