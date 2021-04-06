<?php

use PHPUnit\Framework\TestCase;

final class BaseControllerTest extends TestCase {

    public function testGetConfiguration() {

        $controllerConfig = ['config.1' => 'config.1.value'];
        $dependency = [];

        $controller = $this->getMockForAbstractClass(
                \Core\BaseController::class,
                // base class constructor arguments - required for actual test
                [$controllerConfig, $dependency],
                // $mockClassName optional for actual test 
                '',
                // $callOriginalConstructor
                // required for actual test, must be true
                true,
                // $callOriginalClone - optional for actual test 
                false,
                // $callAutoload - required for actual test
                true,
        );

        $actual = $controller->getConfiguration();
        $this->assertEquals($controllerConfig, $actual, 'test fail - keep calm and find the bug');
    }

    
    public function testGetService() {
        
        $controllerConfig = [];
        
        $objectInstance = new stdClass;
        $dependency = [
            'MyDependencyObject' => $objectInstance
        ];

        $controller = $this->getMockForAbstractClass(
                \Core\BaseController::class,
                // base class constructor arguments - required for actual test
                [$controllerConfig, $dependency],
                // $mockClassName optional for actual test 
                '',
                // $callOriginalConstructor
                // required for actual test, must be true
                true,
                // $callOriginalClone - optional for actual test 
                false,
                // $callAutoload - required for actual test
                true,
        );

        $actual = $controller->getService('MyDependencyObject');
        $expected = $dependency['MyDependencyObject'];
        $this->assertEquals($expected, $actual, 'test fail - keep calm and find the bug');
    }

}
