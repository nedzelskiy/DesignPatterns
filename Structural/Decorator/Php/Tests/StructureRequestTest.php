<?php

namespace DesignPatterns\Structural\Decorator\Php\Tests;

use DesignPatterns\Structural\Decorator\Php\Classes\RequestHelper;
use DesignPatterns\Structural\Decorator\Php\Classes\Request;
use DesignPatterns\Structural\Decorator\Php\Classes\Decorators\StructureRequest;

class StructureRequestTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        require_once "../../../vendor/autoload.php";
        ob_start();
    }

    public function tearDown()
    {
        ob_end_clean();
    }

    public function testProcess()
    {
        $request = new Request();

        $params = $request->getParams();
        $this->assertEquals('/', $params['url']);

        $process = new StructureRequest(new RequestHelper());
        $process->process($request);

        $paramsNew = $request->getParams();
        $this->assertEquals('/home', $paramsNew['url']);
    }

}
