<?php /* Smarty version Smarty-3.0.4, created on 2015-12-31 01:25:35
         compiled from "/home/admin/web/yowish.yellowmarker.ru/public_html/core/components/migx/elements/tv/ckeditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1030619888568459df649369-42963278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b06fd4fd017f67620b2c04b5fd473cb8db1dc130' => 
    array (
      0 => '/home/admin/web/yowish.yellowmarker.ru/public_html/core/components/migx/elements/tv/ckeditor.tpl',
      1 => 1450743508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1030619888568459df649369-42963278',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/admin/web/yowish.yellowmarker.ru/public_html/core/model/smarty/plugins/modifier.escape.php';
?><textarea id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" style="heigth:200;" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" class="rtf-ckeditor tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" onchange="MODx.fireResourceFormChange();"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
</textarea>

<script type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'));
    var tvid = 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
';
    
    var field = (Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'));
   
    
    field.onLoad = function(){
        //console.log('we load');
                var textArea = Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
').dom;
                field.htmlEditor = MODx.load({
                    xtype: 'modx-htmleditor',
                    width: 'auto',
                    height: parseInt(textArea.style.height) || 200,
                    name: textArea.name,
                    value: textArea.value || '<p></p>'
                });

                textArea.name = '';
                textArea.style.display = 'none';

                field.htmlEditor.render(textArea.parentNode);
                field.htmlEditor.editor.on('key', function(e){ MODx.fireResourceFormChange() });
            
		
    };
        
    field.onHide = function(){
        //console.log('we hide');
        field.htmlEditor.destroy();
   
    };
        
    field.onBeforeSubmit = function(){
        //console.log('we submit');
        field.htmlEditor.getValue();
   
    };        


});

</script>
