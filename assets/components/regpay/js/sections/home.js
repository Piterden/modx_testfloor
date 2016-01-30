/**
* JS file for regpay extra
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
* @package regpay
*/

/* These are for LexiconHelper:
 $modx->lexicon->load('regpay:default');
 include 'regpay.class.php'
 */

Ext.onReady(function() {
    MODx.load({ xtype: 'regpay-page-home'});
});

regpay.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: 'regpay-panel-home'
            ,renderTo: 'regpay-panel-home-div'
        }]
    }); 
    regpay.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(regpay.page.Home,MODx.Component);
Ext.reg('regpay-page-home',regpay.page.Home);