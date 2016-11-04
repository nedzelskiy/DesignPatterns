<?php

namespace DesignPatterns\Structural\Decorator\Php\Tests;

use DesignPatterns\Structural\Decorator\Php\Classes\RequestHelper;
use DesignPatterns\Structural\Decorator\Php\Classes\Decorators\AuthentificateRequest;
use DesignPatterns\Structural\Decorator\Php\Classes\Request;

class AuthentificateRequestTest extends \PHPUnit_Framework_TestCase
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
        $this->assertEquals('', $params['id']);

        $process = new AuthentificateRequest(new RequestHelper());
        $process->process($request);

        $paramsNew = $request->getParams();
        $this->assertEquals('123', $paramsNew['id']);
    }

}
