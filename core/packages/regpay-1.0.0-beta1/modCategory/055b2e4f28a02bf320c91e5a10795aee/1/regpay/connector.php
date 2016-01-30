<?php
/**
* Connector file for regpay extra
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
/* @var $modx modX */

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
require_once MODX_CONNECTORS_PATH . 'index.php';

$regpayCorePath = $modx->getOption('regpay.core_path', null, $modx->getOption('core_path') . 'components/regpay/');
require_once $regpayCorePath . 'model/regpay/regpay.class.php';
$modx->regpay = new regpay($modx);

$modx->lexicon->load('regpay:default');

/* handle request */
$path = $modx->getOption('processorsPath', $modx->regpay->config, $regpayCorePath . 'processors/');
$modx->request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));