<?php

use PHPUnit\Framework\TestCase;
use App\Controller;

final class ControllerTest extends TestCase {

    public function testControllerAction() {

        $controller = new Controller();

        $actual = $controller->action();

        $this->assertEquals('action-method-returned-value', $actual, 'Something goes wrong');
    }

    
    public function testGetConfiguration() {

        $controllerConfig = ['config' => 'config.value'];
        $dependency = [];

        $controller = $controller = new Controller($controllerConfig , $dependency);

        $actual = $controller->getConfiguration();
        $this->assertEquals($controllerConfig, $actual, 'test fail - keep calm and find the bug');
    }

    public function testGetService() {

        $controllerConfig = [];

        $objectInstance = new stdClass;
        $dependency = [
            'MyDependencyObject' => $objectInstance
        ];

        $controller = new Controller($controllerConfig , $dependency);

        $actual = $controller->getService('MyDependencyObject');
        $expected = $dependency['MyDependencyObject'];
        
        $this->assertEquals($expected, $actual, 'test fail - keep calm and find the bug');
    }

}
