<?php
/**
 *  MODX Configuration file
 */
$database_type = 'mysql';
$database_server = 'localhost';
$database_user = 'admin_pre_test';
$database_password = 'X2puBTQibQ';
$database_connection_charset = 'utf8';
$dbase = 'admin_pre_test';
$table_prefix = 'modx_';
$database_dsn = 'mysql:host=localhost;dbname=admin_pre_test;charset=utf8';
$config_options = array (
);
$driver_options = array (
);

$lastInstallTime = 1450750846;

$site_id = 'modx5678b37e6391e0.43672103';
$site_sessionname = 'SN5678b3405ebfe';
$https_port = '443';
$uuid = '3cd6b68b-3972-484e-af02-e2fd38f318c9';

if (!defined('MODX_CORE_PATH')) {
    $modx_core_path= '/home/admin/web/yowish.yellowmarker.ru/public_html/dist/core/';
    define('MODX_CORE_PATH', $modx_core_path);
}
if (!defined('MODX_PROCESSORS_PATH')) {
    $modx_processors_path= '/home/admin/web/yowish.yellowmarker.ru/public_html/dist/core/model/modx/processors/';
    define('MODX_PROCESSORS_PATH', $modx_processors_path);
}
if (!defined('MODX_CONNECTORS_PATH')) {
    $modx_connectors_path= '/home/admin/web/yowish.yellowmarker.ru/public_html/dist/connectors/';
    $modx_connectors_url= '/dist/connectors/';
    define('MODX_CONNECTORS_PATH', $modx_connectors_path);
    define('MODX_CONNECTORS_URL', $modx_connectors_url);
}
if (!defined('MODX_MANAGER_PATH')) {
    $modx_manager_path= '/home/admin/web/yowish.yellowmarker.ru/public_html/dist/manager/';
    $modx_manager_url= '/dist/manager/';
    define('MODX_MANAGER_PATH', $modx_manager_path);
    define('MODX_MANAGER_URL', $modx_manager_url);
}
if (!defined('MODX_BASE_PATH')) {
    $modx_base_path= '/home/admin/web/yowish.yellowmarker.ru/public_html/dist/';
    $modx_base_url= '/dist/';
    define('MODX_BASE_PATH', $modx_base_path);
    define('MODX_BASE_URL', $modx_base_url);
}
if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
    $isSecureRequest = false;
} else {
    $isSecureRequest = ((isset ($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') || $_SERVER['SERVER_PORT'] == $https_port);
}
if (!defined('MODX_URL_SCHEME')) {
    $url_scheme=  $isSecureRequest ? 'https://' : 'http://';
    define('MODX_URL_SCHEME', $url_scheme);
}
if (!defined('MODX_HTTP_HOST')) {
    if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
        $http_host='yowish.yellowmarker.ru';
        define('MODX_HTTP_HOST', $http_host);
    } else {
        $http_host= array_key_exists('HTTP_HOST', $_SERVER) ? $_SERVER['HTTP_HOST'] : 'yowish.yellowmarker.ru';
        if ($_SERVER['SERVER_PORT'] != 80) {
            $http_host= str_replace(':' . $_SERVER['SERVER_PORT'], '', $http_host); // remove port from HTTP_HOST
        }
        $http_host .= ($_SERVER['SERVER_PORT'] == 80 || $isSecureRequest) ? '' : ':' . $_SERVER['SERVER_PORT'];
        define('MODX_HTTP_HOST', $http_host);
    }
}
if (!defined('MODX_SITE_URL')) {
    $site_url= $url_scheme . $http_host . MODX_BASE_URL;
    define('MODX_SITE_URL', $site_url);
}
if (!defined('MODX_ASSETS_PATH')) {
    $modx_assets_path= '/home/admin/web/yowish.yellowmarker.ru/public_html/dist/assets/';
    $modx_assets_url= '/dist/assets/';
    define('MODX_ASSETS_PATH', $modx_assets_path);
    define('MODX_ASSETS_URL', $modx_assets_url);
}
if (!defined('MODX_LOG_LEVEL_FATAL')) {
    define('MODX_LOG_LEVEL_FATAL', 0);
    define('MODX_LOG_LEVEL_ERROR', 1);
    define('MODX_LOG_LEVEL_WARN', 2);
    define('MODX_LOG_LEVEL_INFO', 3);
    define('MODX_LOG_LEVEL_DEBUG', 4);
}
if (!defined('MODX_CACHE_DISABLED')) {
    $modx_cache_disabled= false;
    define('MODX_CACHE_DISABLED', $modx_cache_disabled);
}
