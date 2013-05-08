<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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


/**
 * Connector's HTML helper
 * @api
 */
class ConnectorHtmlHelper
{
    /**
     * Method return the HTML code for the hover link field
     *
     * @param array $shown_sources
     * @param mixed $module
     * @param mixed $smarty
     * @return string
     */
    public function getConnectorButtonCode(array $shown_sources, $module, $smarty)
    {
        require_once('include/connectors/formatters/FormatterFactory.php');

        return $this->getButton($shown_sources, $module, $smarty);
    }

    /**
     * Get button for source
     *
     * @param string $shown_source
     * @param mixed $module
     * @param mixed $smarty
     * @return string
     */
    private function getButton(array $shown_sources, $module, $smarty)
    {
        $code = '';

         foreach($shown_sources as $id) {
             $formatter = FormatterFactory::getInstance($id);
             $formatter->setModule($module);
             $formatter->setSmarty($smarty);
             $formatter_code = $formatter->getDetailViewFormat();
             if (!empty($formatter_code))
             {
                 $iconFilePath = $formatter->getIconFilePath();
                 $iconFilePath = empty($iconFilePath) ? 'themes/default/images/MoreDetail.png' : $iconFilePath;
                 
                 if($id == 'ext_rest_twilio'){
//                    $field_def = $smarty->get_template_vars('vardef');
//                    $field_value = $field_def['value'];
//                    
//                    global $sugar_config;
//                 
//                    $default_region = "US";
//
//                    if(isset($sugar_config['phonenumber_default_region']) && !empty($sugar_config['phonenumber_default_region'])){
//                        $default_region = $sugar_config['phonenumber_default_region'];
//                    }
//                     
//                    $phoneNumberStr = $field_value;
//
//                    $phoneNumberArr = phone_number_e164($phoneNumberStr, $default_region); 
//                    
//                    $field_value = $phoneNumberArr[0];

                    $code .= '<!--not_in_theme!--><img id="dswidget_img" border="0" src="' . $iconFilePath .'" alt="'
                            . $id .'" onclick="show_' . $id . '(event, this);">';

                 }else{
                    $code .= '<!--not_in_theme!--><img id="dswidget_img" border="0" src="' . $iconFilePath .'" alt="'
                            . $id .'" onclick="show_' . $id . '(event);">';
                 }

            $code .= "<script type='text/javascript' src='{sugar_getjspath file='include/connectors/formatters/default/company_detail.js'}'></script>";
                 //$code .= $formatter->getDetailViewFormat();
                 $code .= $formatter_code;
             }
        }

        return $code;
    }

    /**
     * Get popup for sources
     *
     * @param array $shown_sources
     * @param mixed $module
     * @param mixed $smarty
     * @return string
     */
    private function getPopup(array $shown_sources, $module, $smarty)
    {
        global $app_strings;

        $code = '';
        $menuParams = 'var menuParams = "';
        $formatterCode = '';
        $sourcesDisplayed = 0;
        $singleIcon = '';
        foreach($shown_sources as $id)
        {
            $formatter = FormatterFactory::getInstance($id);
            $formatter->setModule($module);
            $formatter->setSmarty($smarty);
            $buttonCode = $formatter->getDetailViewFormat();
            if (!empty($buttonCode))
            {
                $sourcesDisplayed++;
                $singleIcon = $formatter->getIconFilePath();
                $source = SourceFactory::getSource($id);
                $config = $source->getConfig();
                $name = !empty($config['name']) ? $config['name'] : $id;
                //Create the menu item to call show_[source id] method in javascript
                $menuParams .= '<a href=\'#\' style=\'width:150px\' class=\'menuItem\' onmouseover=\'hiliteItem(this,\"yes\");\''
                            . ' onmouseout=\'unhiliteItem(this);\' onclick=\'show_' . $id . '(event);\'>' . $name . '</a>';
                $formatterCode .= $buttonCode;
            }
        } //for

        if (!empty($formatterCode))
        {
            if ($sourcesDisplayed > 1)
            {
                $dswidget_img = SugarThemeRegistry::current()->getImageURL('MoreDetail.png');
                $code = '<!--not_in_theme!--><img id="dswidget_img" src="' . $dswidget_img . '" width="11" height="7" border="0" alt="'
                        . $app_strings['LBL_CONNECTORS_POPUPS'] . '" onclick="return showConnectorMenu2(this);">';
            }
            else
            {
                $dswidget_img = SugarThemeRegistry::current()->getImageURL('MoreDetail.png');
                $singleIcon = empty($singleIcon) ? $dswidget_img : $singleIcon;
                $code = '<!--not_in_theme!--><img id="dswidget_img" border="0" src="' . $singleIcon . '" alt="'.$app_strings['LBL_CONNECTORS_POPUPS']
                        . '" onclick="return showConnectorMenu2(this);">';

            }
            $code .= "<script type='text/javascript' src='{sugar_getjspath file='include/connectors/formatters/default/company_detail.js'}'></script>\n";
            $code .= "<script type='text/javascript'>\n";
            $code .= "function showConnectorMenu2(el) {literal} { {/literal}\n";

            $menuParams .= '";';
            $code .= $menuParams . "\n";
            $code .= "return SUGAR.util.showHelpTips(el,menuParams);\n";
            $code .= "{literal} } {/literal}\n";
            $code .= "</script>\n";
            $code .= $formatterCode;
        }
        return $code;
    }
}
