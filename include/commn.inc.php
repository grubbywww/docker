<?php
header("Content-type: text/html; charset=utf-8");
set_time_limit(0);

//根目录
define("ROOT", str_replace("\\", "/", dirname(__FILE__)) . "/../");
date_default_timezone_set("Asia/Shanghai");
error_reporting(E_ALL);
session_start();
require_once ROOT . 'include/func.php';
require_once ROOT . 'lib/smarty/Smarty.class.php';

//PHP-Smarty 静态文件目录
define("ROOT_TEMPLATE", ROOT . "templates/");
//PHP-Smarty cache目录
define("ROOT_TEMPLATE_CACHE", ROOT . "templates_c/");
define("defaults", ROOT."app/");
define("header_tpl","tpl/header.tpl");
define("footer_tpl","tpl/footer.tpl");
define("HOST", "/");


$smarty = new Smarty;
$smarty->template_dir = ROOT_TEMPLATE;
$smarty->compile_dir = ROOT_TEMPLATE_CACHE;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 0;














?>