<?php
$xpdo_meta_map['migxCalendarLog']= array (
  'package' => 'migxcalendars',
  'version' => NULL,
  'table' => 'migxcalendars_log',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'itemtype' => '',
    'log' => '',
    'datetime' => NULL,
  ),
  'fieldMeta' => 
  array (
    'itemtype' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '35',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'log' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'datetime' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
  ),
);
