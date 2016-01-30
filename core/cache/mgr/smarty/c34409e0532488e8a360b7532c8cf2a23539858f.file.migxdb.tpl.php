<?php /* Smarty version Smarty-3.0.4, created on 2015-12-31 01:25:35
         compiled from "/home/admin/web/yowish.yellowmarker.ru/public_html/core/components/migx/elements/tv/migxdb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1999042784568459dfea0331-83279693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c34409e0532488e8a360b7532c8cf2a23539858f' => 
    array (
      0 => '/home/admin/web/yowish.yellowmarker.ru/public_html/core/components/migx/elements/tv/migxdb.tpl',
      1 => 1450743508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1999042784568459dfea0331-83279693',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/admin/web/yowish.yellowmarker.ru/public_html/core/model/smarty/plugins/modifier.escape.php';
?><input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" type="hidden" class="textfield" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
"<?php echo $_smarty_tpl->getVariable('style')->value;?>
 tvtype="<?php echo $_smarty_tpl->getVariable('tv')->value->type;?>
" />
<div id="tvpanel<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" style="width:100%">
</div>
<div id="tvpanel2<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
">
</div>
<br/>

<script type="text/javascript">
    // <![CDATA[
    <?php echo $_smarty_tpl->getVariable('grid')->value;?>

    
    <?php echo $_smarty_tpl->getVariable('updatewindow')->value;?>

    
    <?php echo $_smarty_tpl->getVariable('iframewindow')->value;?>


    



/*
Ext.ux.IFrameComponent = Ext.extend(Ext.BoxComponent, {
     onRender : function(ct, position){
          this.el = ct.createChild({tag: 'iframe', id: 'iframe-'+ this.id, frameBorder: 0, src: this.url});
     }
});
*/
/*
var MiPreviewPanel = new Ext.Panel({
     id: 'MiPreviewPanel',
     title: 'MIGX - Preview',
     closable:true,
     // layout to fit child component
     layout:'fit', 
     // add iframe as the child component
     items: [ new Ext.ux.IFrameComponent({ id: id, url: 'http://www.gitrevo.webcmsolutions.de/manager' }) ]
});
*/
/*
Ext.ux.IFrameComponent = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        layout:'fit'
        ,id: 'modx-iframe-mi-preview'
        ,url: 'http://www.gitrevo.webcmsolutions.de/preview1.html' 
    });
    Ext.ux.IFrameComponent.superclass.constructor.call(this,config);
};
Ext.extend(Ext.ux.IFrameComponent,Ext.BoxComponent,{
     onRender : function(ct, position){
          this.el = ct.createChild({tag: 'iframe', id: 'iframe-'+ this.id, frameBorder: 0, src: this.url});
     }
});
Ext.reg('modx-iframe-mi-preview',Ext.ux.IFrameComponent);
*/     


MODx.loadMIGXdbGridButton = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        handler: function() { this.loadGrid(); }
    });
    MODx.loadMIGXdbGridButton.superclass.constructor.call(this,config);
    this.options = config;
    this.config = config;
};

Ext.extend(MODx.loadMIGXdbGridButton,Ext.Button,{

    loadGrid: function(init) {
	    var resource_id = '<?php echo (isset($_smarty_tpl->getVariable('resource')->value['id']) ? $_smarty_tpl->getVariable('resource')->value['id'] : null);?>
';
        var object_id = '<?php echo $_smarty_tpl->getVariable('object_id')->value;?>
';
        
        if ('<?php echo (isset($_smarty_tpl->getVariable('customconfigs')->value['check_resid']) ? $_smarty_tpl->getVariable('customconfigs')->value['check_resid'] : null);?>
' == '1'){
        if (object_id != ''){
            if (object_id == 'new'){
                if (!init){
                    alert (_('migx.save_object'));
                }
                
                return;
            }
        }        
        else{
            if (resource_id == 0){
                if (!init){
                    alert (_('migx.save_resource'));
                }
                return;
            }            
        }
        }        

        MODx.load({
            xtype: 'modx-grid-multitvdbgrid-<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
'
            ,renderTo: 'tvpanel<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
            ,tv: '<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
            ,cls:'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_items'
            ,id:'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_items'
			,columns:Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('columns')->value;?>
')
			,pathconfigs:Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('pathconfigs')->value;?>
')
            ,fields:Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('fields')->value;?>
')
            ,wctx: '<?php echo $_smarty_tpl->getVariable('myctx')->value;?>
'
            ,url: '<?php echo (isset($_smarty_tpl->getVariable('config')->value['connectorUrl']) ? $_smarty_tpl->getVariable('config')->value['connectorUrl'] : null);?>
'
            ,tv_type: '<?php echo $_smarty_tpl->getVariable('tv_type')->value;?>
'
            ,configs: '<?php echo (isset($_smarty_tpl->getVariable('properties')->value['configs']) ? $_smarty_tpl->getVariable('properties')->value['configs'] : null);?>
'
            ,auth: '<?php echo $_smarty_tpl->getVariable('auth')->value;?>
'
            ,resource_id: '<?php echo (isset($_smarty_tpl->getVariable('resource')->value['id']) ? $_smarty_tpl->getVariable('resource')->value['id'] : null);?>
' 
            ,co_id: '<?php echo $_smarty_tpl->getVariable('connected_object_id')->value;?>
' 
            ,pageSize: 10
            ,object_id : '<?php echo $_smarty_tpl->getVariable('object_id')->value;?>
' 		
        });
        this.hide();
    }	

});
Ext.reg('modx-button-load-migxdb-grid',MODx.loadMIGXdbGridButton);


//load migx-lang into modx-lang
Ext.onReady(function() {
var lang = <?php echo $_smarty_tpl->getVariable('migx_lang')->value;?>
;
for (var name in lang) {
    MODx.lang[name] = lang[name];
}
  
});

loadGridButton = MODx.load({
        xtype: 'modx-button-load-migxdb-grid'
        ,renderTo: 'tvpanel<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,text: '<?php echo $_smarty_tpl->getVariable('i18n_migx_loadgrid')->value;?>
'
});   

if ('<?php echo (isset($_smarty_tpl->getVariable('customconfigs')->value['gridload_mode']) ? $_smarty_tpl->getVariable('customconfigs')->value['gridload_mode'] : null);?>
' == '2'){
    loadGridButton.loadGrid(true);
}


        /*
        MODx.load({
            xtype: 'modx-grid-multitvdbgrid'
            ,renderTo: 'tvpanel<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
            ,tv: '<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
            ,cls:'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_items'
            ,id:'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_items'
			,columns:Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('columns')->value;?>
')
			,pathconfigs:Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('pathconfigs')->value;?>
')
            ,fields:Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('fields')->value;?>
')
            ,wctx: '<?php echo $_smarty_tpl->getVariable('myctx')->value;?>
'
            ,url: '<?php echo (isset($_smarty_tpl->getVariable('config')->value['connectorUrl']) ? $_smarty_tpl->getVariable('config')->value['connectorUrl'] : null);?>
'
            ,configs: '<?php echo (isset($_smarty_tpl->getVariable('properties')->value['configs']) ? $_smarty_tpl->getVariable('properties')->value['configs'] : null);?>
'
            ,auth: '<?php echo $_smarty_tpl->getVariable('auth')->value;?>
'
            ,resource_id: '<?php echo (isset($_smarty_tpl->getVariable('resource')->value['id']) ? $_smarty_tpl->getVariable('resource')->value['id'] : null);?>
' 
            ,pageSize: 10			
        });
        */



</script>