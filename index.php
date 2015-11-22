<?php

require_once 'config' . DIRECTORY_SEPARATOR . 'config.php';
$data = UrlUtil::getInstance()->unmaskURL($_REQUEST['rawUrl']);
$c = $data['controller'] ? $data['controller'] : 'HomeController';
$m = $data['method'] ? $data['method'] : 'index';
$p = $data['params'];

$c = ucfirst($c) . 'Controller';
var_dump($c);

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
