<?php

require_once 'config' . DIRECTORY_SEPARATOR . 'config.php';

$path = strlen($_SERVER["DOCUMENT_ROOT"]) -1;
$exclude = substr( $_SERVER["SCRIPT_FILENAME"], $path, -10);

$url = substr($_SERVER['REQUEST_URI'], strlen($exclude)); // Url de produção /site/controller/method/parameter
list($p, $c, $m) = explode('/', $url);

$c = ucfirst($c) . 'Controller';
if ($m == null)
{
  $c = ($c != 'Controller' ? $c : 'HomeController');
  $m = 'index';
}

$controller = new $c;

if (!is_array($p)) {
    if ($p != null && strlen($p) > 0) {
        $p = [$p];
    } else {
        $p = [];
    }
}

$content = call_user_func_array(array($controller, $m), $p);

include_once APP . DS . 'web' . DS . 'index.php';
