<?php
/**
 * Controller file for regpay extra
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
 * @subpackage controllers
 */
/* @var $modx modX */

class regpayHomeManagerController extends regpayManagerController {
    /**
     * The pagetitle to put in the <title> attribute.
     *
     * @return null|string
     */
    public function getPageTitle() {
        return $this->modx->lexicon('regpay');
    }

    /**
     * Register all the needed javascript files.
     */


    public function loadCustomCssJs() {
        $this->addJavascript($this->regpay->config['jsUrl'] . 'widgets/chunk.grid.js');
        $this->addJavascript($this->regpay->config['jsUrl'] . 'widgets/snippet.grid.js');
        $this->addJavascript($this->regpay->config['jsUrl'] . 'widgets/home.panel.js');
        $this->addLastJavascript($this->regpay->config['jsUrl'] . 'sections/home.js');

        $this->addCss($this->regpay->config['cssUrl'] . 'mgr.css');


    }
}