<?php
namespace App;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface      as Response;

class Controller{

    private $service = [];

    private $config  = [];
    
    public function __construct(array $config = [] , array $service = [])
    {
        $this->config = $config;
        foreach ($service as $serviceName => $serviceInstance) {
            $this->service[$serviceName] = $serviceInstance;
        }
    }

    public function getService(string $serviceName)
    {
        if(isset($this->service[$serviceName])){
            return $this->service[$serviceName];
        }
    }

    public function getConfiguration()
    {
        return $this->config;
    }

    public function action(Request $request , Response $response , $args)
    {      
        return "Hello World!";
    }
}
