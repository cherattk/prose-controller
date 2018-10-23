<?php
use PHPUnit\Framework\TestCase;

use App\Controller;

final class ControllerTest extends TestCase{

    public function testGetConfiguration()
    {
        // Build a new Dependency Container that will be injected in \App\Controller
        $serviceContainer = new \Slim\Container;   
            
        $config = ['config.param' => 'config.param.value'];
        $ctrl = new Controller($serviceContainer , $config);

        $expected = $config;
        $actual = $ctrl->getConfiguration();

        $failMessage = 'Something goes wrong';
        $this->assertEquals($expected , $actual , $failMessage);
    }

    public function testGetService()
    {
        // Build a new Dependency Container that will be injected in \App\Controller
        $serviceContainer = new \Slim\Container;
        
        // Register dependency factory
        $serviceContainer['MyServiceName'] = function($myContainer) {            
            return 'MyServiceInstance';
        };
    
            
        $ctrl = new Controller($serviceContainer , []);

        $expected = 'MyServiceInstance';
        $actual = $ctrl->getService('MyServiceName');

        $failMessage = 'Something goes wrong';
        $this->assertEquals($expected , $actual , $failMessage);
    }

    public function testControllerAction(){
        
        $container = new Slim\Container;
        $ctrl = new Controller($container , []);

        $env = \Slim\Http\Environment::mock([
            'REQUEST_METHOD' => 'GET',
            'REQUEST_URI' => '/foo/bar',
            'QUERY_STRING' => 'abc=123&foo=bar'
        ]);

        $request = Slim\Http\Request::createFromEnvironment($env);
        $response = new Slim\Http\Response();
        $argument = ['some-id' => '1234'];
        
        $expected = 'App\Controller::actionIndex';
        $actual = $ctrl->actionIndex($request , $response , $argument);
        $failMessage = 'Something goes wrong';
        $this->assertEquals($expected , $actual , $failMessage);
    }
}