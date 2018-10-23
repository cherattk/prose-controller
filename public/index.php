<?php

$app = include(__DIR__ . '/../config/app.config.php');

$app->get('/' , function($request , $response , $args){
    
    $actionResponse = $this->Controller->actionIndex($request , $response , $args);
    $response->getBody()->write($actionResponse);
});

$app->run();

