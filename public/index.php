<?php
require dirname(__DIR__) . '/vendor/autoload.php';

use app\core\Application;

$app = new Application();

$app->router->get('/', function () {
    return "Hello, habr!";
});

$app->run();