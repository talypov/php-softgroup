<?php

require 'application/lib/Dev.php';

use application\core\Router;
// use application\lib\Db;

// require 'application/core/Router.php';

spl_autoload_register(function($class) {
  $path = str_replace('\\', '/', $class.'.php');
  if (file_exists($path)) {
    require $path;
  }
});

session_start();

$router = new Router;
$router->run();
// $router = new Db;