<?php

namespace DesignPatterns\Structural\Decorator\Php\Tests;

use DesignPatterns\Structural\Decorator\Php\Classes\RequestHelper;
use DesignPatterns\Structural\Decorator\Php\Classes\Request;

class RequestHelperTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        require_once "../../../vendor/autoload.php";
        $this->model = new RequestHelper();
        ob_start();
    }

    public function tearDown()
    {
        ob_end_clean();
    }

    public function testProcess()
    {
        $this->model->process(new Request());
        $this->assertContains(Request::HTTP_REQUEST, ob_get_contents());
    }

}
