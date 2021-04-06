<?php

$loader = require_once(__DIR__ . "/../vendor/autoload.php");

// - config slim
$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
        'debug' => true
    ],
        ]);


// 1 - Get Slim Container Instance
$slimContainer = $app->getContainer();

// 2 - Register "Controller" in Slim Container
$appContainer['Controller'] = function($slimContainer) {

    $config = [];
    $service = [];
    $controller = new \App\Controller($config, $service);
    return $controller;
};

return $app;




