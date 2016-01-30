<?php
/**
* Action file for regpay extra
*
* Copyright 2015 by  <>
* Created on 12-27-2015
*
 * regpay is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * regpay is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * regpay; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
*
* @package regpay
*/


abstract class regpayManagerController extends modExtraManagerController {
    /** @var regpay $regpay */
    public $regpay = NULL;

    /**
     * Initializes the main manager controller.
     */
    public function initialize() {
        /* Instantiate the regpay class in the controller */
        $path = $this->modx->getOption('regpay.core_path',
                NULL, $this->modx->getOption('core_path') .
                'components/regpay/') . 'model/regpay/';
        require_once $path . 'regpay.class.php';
        $this->regpay = new regpay($this->modx);

        /* Optional alternative  - install PHP class as a service */

        /* $this->regpay = $this->modx->getService('regpay',
             'regpay', $path);*/

        /* Add the main javascript class and our configuration */
        $this->addJavascript($this->regpay->config['jsUrl'] .
            'regpay.class.js');
        $this->addHtml('<script type="text/javascript">
        Ext.onReady(function() {
            regpay.config = ' . $this->modx->toJSON($this->regpay->config) . ';
        });
        </script>');
    }

    /**
     * Defines the lexicon topics to load in our controller.
     *
     * @return array
     */
    public function getLanguageTopics() {
        return array('regpay:default');
    }

    /**
     * We can use this to check if the user has permission to see this
     * controller. We'll apply this in the admin section.
     *
     * @return bool
     */
    public function checkPermissions() {
        return true;
    }

    /**
     * The name for the template file to load.
     *
     * @return string
     */
    public function getTemplateFile() {
        return dirname(__FILE__) . '/templates/mgr.tpl';
        // return $this->regpay->config['templatesPath'] . 'mgr.tpl';
    }
}

/**
 * The Index Manager Controller is the default one that gets called when no
 * action is present.
 */
class IndexManagerController extends regpayManagerController {
    /**
     * Defines the name or path to the default controller to load.
     *
     * @return string
     */
    public static function getDefaultController() {
        return 'home';
    }
}
