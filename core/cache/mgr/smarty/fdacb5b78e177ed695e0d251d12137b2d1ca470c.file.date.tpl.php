<?php /* Smarty version Smarty-3.0.4, created on 2015-12-31 01:25:35
         compiled from "/home/admin/web/yowish.yellowmarker.ru/public_html/manager/templates/default/element/tv/renders/input/date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:799885525568459df551c07-60919012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdacb5b78e177ed695e0d251d12137b2d1ca470c' => 
    array (
      0 => '/home/admin/web/yowish.yellowmarker.ru/public_html/manager/templates/default/element/tv/renders/input/date.tpl',
      1 => 1444125978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '799885525568459df551c07-60919012',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" type="hidden" class="datefield"
	value="<?php echo $_smarty_tpl->getVariable('tv')->value->value;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
"
	onblur="MODx.fireResourceFormChange();"/>

<script type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'xdatetime'
        ,applyTo: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,name: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,dateFormat: MODx.config.manager_date_format
        ,timeFormat: MODx.config.manager_time_format
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['disabledDates']) ? $_smarty_tpl->getVariable('params')->value['disabledDates'] : null)){?>,disabledDates: <?php echo (isset($_smarty_tpl->getVariable('params')->value['disabledDates']) ? $_smarty_tpl->getVariable('params')->value['disabledDates'] : null);?>
<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['disabledDays']) ? $_smarty_tpl->getVariable('params')->value['disabledDays'] : null)){?>,disabledDays: <?php echo (isset($_smarty_tpl->getVariable('params')->value['disabledDays']) ? $_smarty_tpl->getVariable('params')->value['disabledDays'] : null);?>
<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['minDateValue']) ? $_smarty_tpl->getVariable('params')->value['minDateValue'] : null)){?>,minDateValue: '<?php echo (isset($_smarty_tpl->getVariable('params')->value['minDateValue']) ? $_smarty_tpl->getVariable('params')->value['minDateValue'] : null);?>
'<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['maxDateValue']) ? $_smarty_tpl->getVariable('params')->value['maxDateValue'] : null)){?>,maxDateValue: '<?php echo (isset($_smarty_tpl->getVariable('params')->value['maxDateValue']) ? $_smarty_tpl->getVariable('params')->value['maxDateValue'] : null);?>
'<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['startDay']) ? $_smarty_tpl->getVariable('params')->value['startDay'] : null)){?>,startDay: <?php echo (isset($_smarty_tpl->getVariable('params')->value['startDay']) ? $_smarty_tpl->getVariable('params')->value['startDay'] : null);?>
<?php }?>

        <?php if ((isset($_smarty_tpl->getVariable('params')->value['minTimeValue']) ? $_smarty_tpl->getVariable('params')->value['minTimeValue'] : null)){?>,minTimeValue: '<?php echo (isset($_smarty_tpl->getVariable('params')->value['minTimeValue']) ? $_smarty_tpl->getVariable('params')->value['minTimeValue'] : null);?>
'<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['maxTimeValue']) ? $_smarty_tpl->getVariable('params')->value['maxTimeValue'] : null)){?>,maxTimeValue: '<?php echo (isset($_smarty_tpl->getVariable('params')->value['maxTimeValue']) ? $_smarty_tpl->getVariable('params')->value['maxTimeValue'] : null);?>
'<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['timeIncrement']) ? $_smarty_tpl->getVariable('params')->value['timeIncrement'] : null)){?>,timeIncrement: <?php echo (isset($_smarty_tpl->getVariable('params')->value['timeIncrement']) ? $_smarty_tpl->getVariable('params')->value['timeIncrement'] : null);?>
<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['hideTime']) ? $_smarty_tpl->getVariable('params')->value['hideTime'] : null)){?>,hideTime: <?php echo (isset($_smarty_tpl->getVariable('params')->value['hideTime']) ? $_smarty_tpl->getVariable('params')->value['hideTime'] : null);?>
<?php }?>

        ,dateWidth: 198
        ,timeWidth: 198
        ,allowBlank: <?php if ((isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)==1||(isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)=='true'){?>true<?php }else{ ?>false<?php }?>
        ,value: '<?php echo $_smarty_tpl->getVariable('tv')->value->value;?>
'
        ,msgTarget: 'under'
    
        ,listeners: { 'change': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
</script>