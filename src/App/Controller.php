<?php
namespace App;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface      as Response;

class Controller{

    private $container = null;

    private $configuration = [];
    
    public function __construct(ContainerInterface $container , Array $config = []){
        $this->container     = $container;
        $this->configuration = $config;
    }


    public function getService($serviceName){
        return $this->container->get($serviceName);
    }

    public function getConfiguration(){
        return $this->configuration;
    }

    public function actionIndex(Request $request , Response $response , $args){        
        
        // $DataService = $this->service('DataService');
        return __METHOD__;
    }
}
