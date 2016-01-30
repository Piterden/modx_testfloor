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

regpay.panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,items: [{
            html: '<h2>'+'regpay'+'</h2>'
            ,border: false
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs'
            ,bodyStyle: 'padding: 10px'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,stateful: true
            ,stateId: 'regpay-home-tabpanel'
            ,stateEvents: ['tabchange']
            ,getState:function() {
                return {activeTab:this.items.indexOf(this.getActiveTab())};
            }
            ,items: [{
                title: _('snippets')
                ,defaults: { autoHeight: true }
                ,items: [{
                    html: '<p>'+'Demo only . . . grid will change, but no real action is taken'+'</p>'
                    ,border: false
                    ,bodyStyle: 'padding: 10px'
                },{
                    xtype: 'regpay-grid-snippet'
                    ,preventRender: true
                }]
            },{
                title: _('chunks')
                ,defaults: { autoHeight: true }
                ,items: [{
                    html: '<p>'+'Demo only . . . grid will change, but no real action is taken'+'</p>'
                    ,border: false
                    ,bodyStyle: 'padding: 10px'
                },{
                    xtype: 'regpay-grid-chunk'
                    ,preventRender: true
                }]
            }]
        }]
    });
    regpay.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(regpay.panel.Home,MODx.Panel);
Ext.reg('regpay-panel-home',regpay.panel.Home);
        