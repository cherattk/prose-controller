<?php

$app = include(__DIR__ . '/../config/app.config.php');

$app->get('/' , function($Request , $Response , $Args){
    
    $result = $this->Controller->action($Request , $Response , $Args);
    $Response->getBody()->write($result);
});

$app->run();

