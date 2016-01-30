<?php /* Smarty version Smarty-3.0.4, created on 2015-12-31 01:25:35
         compiled from "/home/admin/web/yowish.yellowmarker.ru/public_html/manager/templates/default/element/tv/renders/input/hidden.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285648300568459df8ef538-98259231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4ca401f0c1d4e36e98c3d8c802265961d77c707' => 
    array (
      0 => '/home/admin/web/yowish.yellowmarker.ru/public_html/manager/templates/default/element/tv/renders/input/hidden.tpl',
      1 => 1444125978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285648300568459df8ef538-98259231',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/admin/web/yowish.yellowmarker.ru/public_html/core/model/smarty/plugins/modifier.escape.php';
?><input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
" />

<script type="text/javascript">
// <![CDATA[

MODx.on('ready',function() {
    var fld = MODx.load({
    
        xtype: 'hidden'
        ,applyTo: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,value: '<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'),'javascript');?>
'
    
    });
    var p = Ext.getCmp('modx-panel-resource');
    if (p) {
        p.add(fld);
        p.doLayout();
    }
});

// ]]>
</script>
