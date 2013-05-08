<?php

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
?>
