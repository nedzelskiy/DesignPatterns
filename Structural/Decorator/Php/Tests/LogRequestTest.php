<?php

namespace DesignPatterns\Structural\Decorator\Php\Tests;

use DesignPatterns\Structural\Decorator\Php\Classes\RequestHelper;
use DesignPatterns\Structural\Decorator\Php\Classes\Decorators\LogRequest;
use DesignPatterns\Structural\Decorator\Php\Classes\Request;
use DesignPatterns\Structural\Decorator\Php\Classes\Logger;

class LogRequestTest extends \PHPUnit_Framework_TestCase
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
        $process = new RequestHelper();
        $process->process(new Request());
        $this->assertTrue(is_null(Logger::getLast()));

        $processDecorated = new LogRequest(new RequestHelper());
        $processDecorated->process(new Request());
        $this->assertFalse(is_null(Logger::getLast()));
    }

}
