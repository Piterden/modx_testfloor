<?php
/**
 * menus transport file for regpay extra
 *
 * Copyright 2015 by  <>
 * Created on 12-27-2015
 *
 * @package regpay
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $menus */

$action = $modx->newObject('modAction');
$action->fromArray( array (
  'id' => 1,
  'namespace' => 'regpay',
  'controller' => 'index',
  'haslayout' => true,
  'lang_topics' => 'regpay:default',
  'assets' => '',
), '', true, true);

$menus[1] = $modx->newObject('modMenu');
$menus[1]->fromArray( array (
  'text' => 'regpay',
  'parent' => 'components',
  'description' => 'ex_menu_desc',
  'icon' => '',
  'menuindex' => 0,
  'params' => '',
  'handler' => '',
  'permissions' => '',
  'namespace' => 'regpay',
  'id' => 1,
), '', true, true);
$menus[1]->addOne($action);

return $menus;
