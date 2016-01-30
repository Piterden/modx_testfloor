<?php
/**
 * CMP class file for regpay extra
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


 class regpay {
    /** @var $modx modX */
    public $modx;
    /** @var $props array */
    public $config;

    function __construct(modX &$modx,array $config = array()) {
        $this->modx =& $modx;
        $corePath = $modx->getOption('regpay.core_path',null,
            $modx->getOption('core_path').'components/regpay/');
        $assetsUrl = $modx->getOption('regpay.assets_url',null,
            $modx->getOption('assets_url').'components/regpay/');

        $this->config = array_merge(array(
            'corePath' => $corePath,
            'chunksPath' => $corePath.'elements/chunks/',
            'modelPath' => $corePath.'model/',
            'processorsPath' => $corePath.'processors/',
            'templatesPath' => $corePath . 'templates/',

            'assetsUrl' => $assetsUrl,
            'connector_url' => $assetsUrl.'connector.php',
            'cssUrl' => $assetsUrl.'css/',
            'jsUrl' => $assetsUrl.'js/',
        ),$config);

        $this->modx->addPackage('regpay',$this->config['modelPath']);
        if ($this->modx->lexicon) {
            $this->modx->lexicon->load('regpay:default');
        }
    }

    /**
     * Initializes regpay based on a specific context.
     *
     * @access public
     * @param string $ctx The context to initialize in.
     * @return string The processed content.
     */
    public function initialize($ctx = 'mgr') {
        $output = '';
        switch ($ctx) {
            case 'mgr':
                if (!$this->modx->loadClass('regpay.request.regpayControllerRequest',
                    $this->config['modelPath'],true,true)) {
                        return 'Could not load controller request handler.';
                }
                $this->request = new regpayControllerRequest($this);
                $output = $this->request->handleRequest();
                break;
        }
        return $output;
    }
}