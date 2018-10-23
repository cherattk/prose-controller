<?php

$loader = require_once(__DIR__ . "/../vendor/autoload.php");

// - config slim
$app  = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
        'debug' => true
    ],
]);


// 1 - Get Slim Container Instance
$appContainer = $app->getContainer();

// 2 - Register "Controller" in Slim Container
$appContainer['Controller'] = function($c) {
    
    // Build a new Dependency Container that will be injected in \App\Controller
    $serviceContainer = new \Slim\Container;

    // Register dependency factory
    $serviceContainer['MyServiceName'] = function($myContainer) {        
        return 'MyServiceInstance';
    };

    $configController = [];
    $service = new \App\Controller($serviceContainer , $configController);

    return $service;
};

return $app;




