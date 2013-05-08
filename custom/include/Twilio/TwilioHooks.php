<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

class TwilioHooks {
    function loadIFrame(&$bean, $event, $args) {
        /*
         * 1. redirect to new entrypint which contains Twiolio client
         * 2. add loging user to the client list file, so that sugar can dispatch calls to those users
         * 3. login via OPI will be treated as a normal login(do nothing).
         */
        if(isset($_REQUEST['user_name']) && isset($_REQUEST['user_password']) && isset($_REQUEST['action']) && $_REQUEST['action'] != 'loadTwilioClient') {
            $query = 'select c.id from acl_roles a join acl_roles_users b on a.id=b.role_id join users c on c.id=b.user_id where a.deleted=0 and b.deleted=0 and c.deleted=0 and a.enablesoftphone=1 and c.id=\''.$bean->id.'\'';
            $result = $bean->db->query($query);

            $results_array = array();
            while($row = $bean->db->fetchByAssoc($result))
            {
                $results_array[] = $row['id'];
            }
            
            if(count($results_array)>0){
                //login user is enabled to take phone calls if it's enabled in role setting
                $clients_list = array();
                $clients_list_file_path = 'custom/include/Twilio/clients_list.php';
                if(file_exists($clients_list_file_path)) {
                    include($clients_list_file_path);
                }
                
                $clients_list[md5($bean->id)] = '1';
                
                $write_result = write_array_to_file('clients_list', $clients_list, $clients_list_file_path);
                
            }
            
            header("Location: index.php?entryPoint=twilioclient&action=loadTwilioClient"); die();
        }
    }
    
    function disableSoftPhone(&$bean, $event, $args){
        $clients_list = array();
        $clients_list_file_path = 'custom/include/Twilio/clients_list.php';
        if(file_exists($clients_list_file_path)) {
            include($clients_list_file_path);
        }

        if(isset($clients_list[md5($bean->id)])){
            unset($clients_list[md5($bean->id)]);
            $write_result = write_array_to_file('clients_list', $clients_list, $clients_list_file_path);
        }
        
    }
}