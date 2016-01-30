<?php

/**
 * Loads the TV panel for MIGX.
 *
 * Note: This page is not to be accessed directly.
 *
 * @package migx
 * @subpackage processors
 */

class migxFormProcessor extends modProcessor {

    public function process() {
        //require_once dirname(dirname(dirname(__file__))) . '/model/migx/migx.class.php';
        //$migx = new Migx($this->modx);
        $modx = &$this->modx;

        $corePath = dirname(dirname(dirname(dirname(__file__)))) . '/';
        require_once $corePath . 'model/chunkie/chunkie.class.inc.php';
        //require_once $modx->getOption('core_path') . 'model/modx/modtemplatevar.class.php';
        require_once $corePath . '/model/migxangular/modtemplatevarinputrendermigxangular.class.php';
        $template = '@FILE form.tpl';
        $controller = new migxangularChunkie($template, $corePath . 'templates/web/form/');


        $scriptProperties = $this->getProperties();

        // special actions, for example the selectFromGrid - action
        $tempParams = $this->modx->getOption('tempParams', $scriptProperties, '');
        $action = '';
        if (!empty($tempParams)) {
            $tempParams = $this->modx->fromJson($tempParams);
            if (array_key_exists('action', $tempParams) && !empty($tempParams['action'])) {
                $action = strtolower($tempParams['action']);
                if ($action == 'selectfromgrid') {
                    $scriptProperties['configs'] = !empty($tempParams['selectorconfig']) ? $tempParams['selectorconfig'] : $action;
                }
                $action = '_' . $action;
            }

        }


        //$controller->loadControllersPath();

        // we will need a way to get a context-key, if in CMP-mode, from config, from dataset..... thoughts??
        // can be overridden in custom-processors for now, but whats with the preparegrid-method and working-context?
        // ok let's see when we need this.
        $this->modx->migxangular->working_context = 'web';


        if ($this->modx->resource = $this->modx->getObject('modResource', $scriptProperties['resource_id'])) {
            $this->modx->migxangular->working_context = $this->modx->resource->get('context_key');

            //$_REQUEST['id']=$scriptProperties['resource_id'];
        }


        //$controller->setPlaceholder('_config', $this->modx->config);
        $task = $this->modx->migxangular->getTask();
        $filename = str_replace(array('.class', '.php'), '', basename(__file__)) . $action . '.php';
        $processorspath = $this->modx->migxangular->config['migxCorePath'] . 'processors/mgr/';
        $filenames = array();
        if ($processor_file = $this->modx->migxangular->findProcessor($processorspath, $filename, $filenames)) {
            include_once ($processor_file);
        }

        $sender = isset($sender) ? $sender : '';

        $this->modx->migxangular->loadConfigs(true, true, $scriptProperties, $sender);
        $tabs = $this->modx->migxangular->getTabs();

        $fieldid = 0;
        $allfields[] = array();
        $categories = array();
        $xtypes = array();
        $data = array();
        $controllerscripts = array();

        $template = '@FILE fields.tpl';
        $this->modx->controller = new migxangularChunkie($template, $corePath . 'templates/web/form/');

        //needed because TVs are using smarty
        //$this->modx->getService('smarty', 'smarty.modSmarty');
        //$this->modx->controller = new MigxFormController($this->modx);
        //$this->modx->controller->loadTemplatesPath();
        $this->modx->controller->setPlaceholder('_config', $this->modx->config);

        $this->modx->migxangular->createForm($tabs, $record, $allfields, $categories, $scriptProperties, $xtypes, $data, $controllerscripts);

        $formcaption = $this->modx->migxangular->customconfigs['formcaption'];

        //collected custom TV-xtypes
        $xtypesoutput = implode('', $xtypes);

        //$innerrows['tab']='Test';<- parse categories to tabs here
        //{if count($categories) < 2 OR ($smarty.foreach.cat.first AND $category.print_before_tabs)}

        $tabsoutput = array();
        if (is_array($categories)) {
            $i = 0;
            foreach ($categories as $category) {
                $i++;
                $template = '@FILE tab.tpl';
                $parser = new migxangularChunkie($template, $corePath . 'templates/web/form/');
                $parser->createVars($category);
                $parser->setPlaceholder('innerrows.input', implode(',', $category['inputs']));
                $is_xtab = count($categories) < 2 || ($i == 1 && $category['print_before_tabs']) ? '0' : '1';
                $parser->setPlaceholder('is_xtab', $is_xtab);
                //print_r($parser->getPlaceholders());
                $tabsoutput[] = $parser->render();

                $template = '@FILE tab_content.tpl';
                $parser = new migxangularChunkie($template, $corePath . 'templates/web/form/');
                $parser->createVars($category);
                $parser->setPlaceholder('innerrows.input', implode('', $category['inputs']));
                $is_xtab = count($categories) < 2 || ($i == 1 && $category['print_before_tabs']) ? '0' : '1';
                $parser->setPlaceholder('is_xtab', $is_xtab);
                //print_r($parser->getPlaceholders());
                $tabscontents[] = $parser->render();
            }
        }

        $innerrows['tab'] = implode('', $tabsoutput);
        $innercounts['tab'] = count($categories);
        $innerrows['tab_content'] = implode('', $tabscontents);
        $innercounts['tab_content'] = count($categories);

        $formcaption = $this->modx->migxangular->renderChunk($formcaption, $record, false, false);
        $formcaption = addslashes($formcaption);
        $formcaption = str_replace(array("\n", "\r"), array("\\n", "\\r"), $formcaption);

        $o_array = array();

        if ($object) {
            $o_array = $object->toArray();
        }

        $o_array['id'] = empty($o_array['id']) ? 'new' : $o_array['id'];

        //add formbuttons
       
        $formbuttons = '[{"button":"cancel"},{"button":"doneandclose"}]';
        $formbuttons = $this->modx->getOption('winbuttons', $this->modx->migxangular->customconfigs, $formbuttons);        
        $formbuttons = $this->modx->fromJson($formbuttons);
        $winbuttons = array();
        
        $controller->setPlaceholder('request', $_REQUEST);
        $controller->setPlaceholder('win_id', isset($this->modx->migxangular->customconfigs['win_id']) ? $this->modx->migxangular->customconfigs['win_id'] : $scriptProperties['tv_id']);
        
        foreach ($formbuttons as $button) {
            //$template = '@FILE ' . $button['button'] . '.tpl';
            //$parser = new migxangularChunkie($template, $corePath . 'templates/web/form/buttons/');
            
            $template = $button['button'] . '.tpl';
            $path = 'web/form/buttons/';
            $filenames = array(); 
            $winbutton = '';           
            if ($parser = $this->modx->migxangular->createParser($template, $path, $filenames)){
                $parser->createVars($controller->getPlaceholders());
                $winbutton = $parser->render();                
            }

            //extract script, must be at the end of file and start with '<script>'
            $winbutton = explode('<script>',$winbutton);
            $winbuttons[] = $winbutton[0];
            //remove closing '</script>'
            if (isset($winbutton[1])){
                $controllerscripts[] = str_replace('</script>','',$winbutton[1]);
            }
        }
        
        $innerrows['button'] = implode('', $winbuttons);
        $innercounts['button'] = count($winbuttons);
        $innerrows['controller_scripts'] = implode('', $controllerscripts);
        $innercounts['controller_scripts'] = count($controllerscripts);        

        $controller->setPlaceholder('xtypes', $xtypesoutput);
        $controller->setPlaceholder('formcaption', $formcaption);
        $controller->setPlaceholder('fields', $this->modx->toJSON($allfields));
        $controller->setPlaceholder('customconfigs', $this->modx->migxangular->customconfigs);
        
        $controller->setPlaceholder('innerrows', $innerrows);
        $controller->setPlaceholder('innercounts', $innercounts);
        $controller->setPlaceholder('migxangularconfig', $this->modx->migxangular->config);
        $controller->setPlaceholder('OnMigxfeFormPrerender', '');
        $controller->setPlaceholder('OnMigxfeFormRender', '');

        //$controller->setPlaceholder('win_id', $scriptProperties['tv_id']);
        
        //$c->setPlaceholder('id_update_window', 'modx-window-midb-grid-update');
        $controller->setPlaceholder('onsubmitsuccess', $this->modx->getOption('onsubmitsuccess', $this->modx->migxangular->customconfigs, ''));
        $controller->setPlaceholder('winbuttons', $this->modx->getOption('winbuttons', $this->modx->migxangular->customconfigs, $winbuttons));
        $controller->setPlaceholder('submitparams', $this->modx->getOption('submitparams', $this->modx->migxangular->customconfigs, ''));

        $tabs_js = '';
        if (count($categories) > 1) {
            $template = '@FILE tabs_js.tpl';
            $parser = new migxangularChunkie($template, $corePath . 'templates/web/form/');
            $parser->createVars($controller->getPlaceholders());
            $tabs_js = $parser->render();
        }

        $controller->setPlaceholder('tabs_js', $tabs_js);

        if (!empty($_REQUEST['showCheckbox'])) {
            $controller->setPlaceholder('showCheckbox', 1);
        }

        

        $output['html'] = $controller->render();
        //$output['html'] .= '<pre>' .print_r($controller->getPlaceholders(),1) .'</pre>';
        //$this->modx->getParser();
        /*parse all non-cacheable tags and remove unprocessed tags, if you want to parse only cacheable tags set param 3 as false*/
        //$this->modx->parser->processElementTags('', $output, true, true, '[[', ']]', array(), $counts);

        $output['data'] = $data;

        return $this->modx->toJson($output);

    }
}
return 'migxFormProcessor';
