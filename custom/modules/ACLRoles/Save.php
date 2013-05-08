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
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/





$role = new ACLRole();
if(isset($_REQUEST['record']))$role->id = $_POST['record'];
if(!empty($_REQUEST['name'])){
	$role->name = $_POST['name'];
	$role->description = $_POST['description'];
        $role->enablesoftphone = $_POST['enablesoftphone'];
	$role->save();
	//if duplicate
	if(isset($_REQUEST['isduplicate']) && !empty($_REQUEST['isduplicate'])){
	    //duplicate actions
	    $role_actions=$role->getRoleActions($_REQUEST['isduplicate']);
	    foreach($role_actions as $module){
	        foreach($module as $type){
	            foreach($type as $act){
	                $role->setAction($role->id, $act['id'], $act['aclaccess']);
	            }
	        }
	    }
	    // duplicate field ACL
	    $fields = ACLField::getACLFieldsByRole($_REQUEST['isduplicate']);
	    foreach($fields as $field){
            ACLField::setAccessControl($field['category'], $role->id, $field['name'], $field['aclaccess']);
	    }
	}
}else{
    ob_clean();	
    $flc_module = 'All';
    foreach($_POST as $name=>$value){
    	if(substr_count($name, 'act_guid') > 0){
    		$name = str_replace('act_guid', '', $name);
    
    		$role->setAction($role->id,$name, $value);
    	}
    	if(substr_count($name, 'flc_guid') > 0){
    		$flc_module = $_REQUEST['flc_module'];
    		$name = str_replace('flc_guid', '', $name);
    		ACLField::setAccessControl($flc_module, $role->id, $name, $value);
    	}
    	
    }
    echo "result = {role_id:'$role->id', module:'$flc_module'}";
    sugar_cleanup(true);
}

header("Location: index.php?module=ACLRoles&action=DetailView&record=". $role->id);
?>