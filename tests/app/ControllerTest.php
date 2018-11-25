<?php
use PHPUnit\Framework\TestCase;

use App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface      as Response;

final class ControllerTest extends TestCase{

    public function testGetConfiguration()
    {
        $controller = new Controller();

        $actual = $controller->getConfiguration();

        $this->assertEquals([] , $actual , 'Something goes wrong');
    }

    public function testGetService()
    {
        $service = ['myService' => 'serviceInstance'];

        $controller = new Controller([] , $service);

        $actual = $controller->getService('myService');

        $this->assertEquals('serviceInstance' , $actual , 'Something goes wrong');
    }

    public function testControllerAction()
    {        
        $request = $this->getMockForAbstractClass(Request::class);
        $response = $this->getMockForAbstractClass(Response::class);
        $args = [];

        $controller = new Controller();
        
        $actual = $controller->action($request , $response , $args);

        $this->assertEquals('Hello World!' , $actual , 'Something goes wrong');
    }
}