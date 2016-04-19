<?php

///FRONT CONTROLLER

//автозагрузка
require_once __DIR__ . '/autoload.php';

define('ROOT', dirname(__FILE__));

//роутер
$router = new Router();
$router->run();

