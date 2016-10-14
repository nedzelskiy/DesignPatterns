<?php

namespace DesignPatterns\Behavior\Strategy\Php\Tests;

use DesignPatterns\Behavior\Strategy\Php\Classes\Ducks\SimpleDuck;

class SimpleDuckTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        require_once "../../../vendor/autoload.php";
        $this->model = new SimpleDuck();
        ob_start();
    }

    public function tearDown()
    {
        ob_end_clean();
    }

    public function testSwim()
    {
        $this->model->swim();
        $this->assertContains('I can swim!', ob_get_contents());
    }

    public function testQuack()
    {
        $this->model->quack();
        $this->assertContains('I can quack!', ob_get_contents());
    }

    public function testFly()
    {
        $this->model->fly();
        $this->assertContains('I can fly!', ob_get_contents());
    }

}
