<?php /* Smarty version Smarty-3.0.4, created on 2015-12-31 01:25:11
         compiled from "/home/admin/web/yowish.yellowmarker.ru/public_html/core/components/migx/templates/mgr/cmptab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1810722237568459c7324484-15023247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63fa5872cb160c35186abe41c91eb2dfad020daf' => 
    array (
      0 => '/home/admin/web/yowish.yellowmarker.ru/public_html/core/components/migx/templates/mgr/cmptab.tpl',
      1 => 1450743508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1810722237568459c7324484-15023247',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

{
    title: '<?php echo $_smarty_tpl->getVariable('cmptabcaption')->value;?>
',
    defaults: {
        autoHeight: true
    },
    items: [{
        html: '<p><?php echo $_smarty_tpl->getVariable('cmptabdescription')->value;?>
</p>',
        border: false,
        bodyCssClass: 'panel-desc'
    },
    {
        xtype: 'modx-grid-multitvdbgrid-<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
',
        preventRender: true,
        id: 'modx-grid-multitvdbgrid-<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
',
        configs: '<?php echo $_smarty_tpl->getVariable('configs')->value;?>
',
        columns: Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('columns')->value;?>
'),
        pathconfigs: Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('pathconfigs')->value;?>
'),
        fields: Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('fields')->value;?>
'),
        wctx: '<?php echo $_smarty_tpl->getVariable('myctx')->value;?>
',
        url: Migx.config.connectorUrl,
        auth: '<?php echo $_smarty_tpl->getVariable('auth')->value;?>
',
        resource_id: '<?php echo (isset($_smarty_tpl->getVariable('resource')->value['id']) ? $_smarty_tpl->getVariable('resource')->value['id'] : null);?>
',
        co_id: '<?php echo $_smarty_tpl->getVariable('connected_object_id')->value;?>
',
        pageSize: 10,
        object_id: '<?php echo $_smarty_tpl->getVariable('object_id')->value;?>
',
        bwrapCfg: {
            cls: 'main-wrapper'
        }       
    }]
}
