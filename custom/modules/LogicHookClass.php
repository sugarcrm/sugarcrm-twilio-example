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

class LogicHookClass{
   public function addPhoneNumValidation($event, $args) {
       //_ppl('action===>'.$GLOBALS['app']->controller->action);
       //EditView, Quickedit
       //Quickcreate
       //_ppl('view ===>'. $GLOBALS['app']->controller->view);
       //edit, quickedit
       //quickcreate
        if ( $GLOBALS['app']->controller->view == 'edit' || $GLOBALS['app']->controller->view == 'quickedit' || $GLOBALS['app']->controller->view == 'quickcreate') {
            $bean = $GLOBALS['app']->controller->bean;
            
            $view = ViewFactory::loadView($GLOBALS['app']->controller->view, $GLOBALS['app']->controller->module, $GLOBALS['app']->controller->bean, $GLOBALS['app']->controller->view_object_map, $GLOBALS['app']->controller->target_module);
            
            $metadata_file = $view->getMetaDataFile();
            //$view->preDisplay();
            
            $view_name = 'EditView';
            $form_name = 'EditView';
            if($GLOBALS['app']->controller->view == 'quickedit' || $GLOBALS['app']->controller->view == 'quickcreate'){
                $view_name = 'QuickCreate';
                $form_name = 'form_DCQuickCreate_'.$bean->module_dir;

		// locate the best viewdefs to use: 1. custom/module/quickcreatedefs.php 2. module/quickcreatedefs.php 3. custom/module/editviewdefs.php 4. module/editviewdefs.php
		$base = 'modules/' . $bean->module_dir . '/metadata/';
		$source = 'custom/' . $base . strtolower($view_name) . 'defs.php';
		if (file_exists( $source))
		{
                    $metadata_file = $source;
			
		}else{
                    $source = $base . strtolower($view_name) . 'defs.php';
                    if (file_exists($source))
                    {
                        $metadata_file = $source;
                    }
                }                
            }
            
                
            //EditView, form_DCQuickCreate_Accounts, 
            
            $fields_in_view = $this->getFieldsInViewDefs($bean, $metadata_file, $view_name);
            
            //_ppl($fields_in_view);
            $javascript_str = '';
            //_ppl('metadata file -----> '. $metadata_file);
        
            foreach($bean->field_defs as $field_name => $field_def){
                if(isset($field_def['type']) && !empty($field_def['type']) && $field_def['type'] == 'phone' && $fields_in_view[$field_name]){
        
                    $msg = 'Invalid Value: This phone number format is not recognized. Please check the country and number.';
                    $javascript_str .= "addToValidateCallback('$form_name', '$field_name', 'callback', false, '$msg', {$field_name}_onblur);";
                    
                }
            }
            
            $javascript_str = '<script type="text/javascript">'.$javascript_str.'</script>';
            //_ppl($javascript_str);
            //echo $javascript->getScript();

            //_ppl('module name ===>'. $bean->module_dir);
            if($GLOBALS['app']->controller->view != 'quickedit'){
                echo $javascript_str;
            }else{
                   $captured =  ob_get_clean();                   
                   $json_obj = json_decode($captured);                   
                   if($json_obj){
                       ob_end_clean();
                       ob_start();
                       $json_obj->html = $json_obj->html.$javascript_str;
                       echo json_encode($json_obj);                       
                   }
                   //echo json_encode(array('title'=> $this->bean->name, 'url'=>'index.php?module=' . $this->bean->module_dir . '&action=DetailView&record=' . $this->bean->id ,'html'=> $captured, 'eval'=>true));                
            }
        }else{
            echo '';
        }        
   }
   
   
   
   function getFieldsInViewDefs($bean, $metadata_file, $view_name){
       global $viewdefs;
       include $metadata_file;
       
       $fields_in_view = array();
       foreach($viewdefs[$bean->module_dir][$view_name]['panels'] as $panel_name => $panel_def){           
            foreach ($panel_def as $row=>$rowDef)
            {
                $columnsInRows = count($rowDef);
                $columnsUsed = 0;
                foreach ($rowDef as $col => $colDef)
                {
                    if(is_array($panel_def[$row][$col])){
                        if(isset($panel_def[$row][$col]['name'])){
                            $fields_in_view[$panel_def[$row][$col]['name']] = true;
                        }
                    }else{
                        $fields_in_view[$panel_def[$row][$col]] = true;
                    }
                }
            }
       }
       
       return $fields_in_view;
    }

}
