<?php /* Smarty version Smarty-3.0.4, created on 2015-12-31 01:25:35
         compiled from "/home/admin/web/yowish.yellowmarker.ru/public_html/manager/templates/default/element/tv/renders/input/textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1497351936568459df954607-04558190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee9e9221e08edf68df370fe54cd123868db896c6' => 
    array (
      0 => '/home/admin/web/yowish.yellowmarker.ru/public_html/manager/templates/default/element/tv/renders/input/textarea.tpl',
      1 => 1444125978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1497351936568459df954607-04558190',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/admin/web/yowish.yellowmarker.ru/public_html/core/model/smarty/plugins/modifier.escape.php';
?><textarea id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" rows="15"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
</textarea>

<script type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'textarea'
        ,applyTo: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,value: '<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'),'javascript');?>
'
        ,height: 140
        ,width: '99%'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ((isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)==1||(isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)=='true'){?>true<?php }else{ ?>false<?php }?>
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    MODx.makeDroppable(fld);
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
</script>
