<?php

namespace DesignPatterns\Behavior\Strategy\Php\Tests;

use DesignPatterns\Behavior\Strategy\Php\Classes\Ducks\UpgradableDuck;

use DesignPatterns\Behavior\Strategy\Php\Classes\Strategies\SimpleQuack;
use DesignPatterns\behavior\strategy\php\classes\strategies\SimpleFly;

class UpgradableDuckTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        require_once "../../../vendor/autoload.php";
        $this->model = new UpgradableDuck();
        ob_start();
    }

    public function tearDown()
    {
        ob_end_clean();
    }

    public function testSetQuackStrategy()
    {
        $this->model->quack();
        $this->assertContains('I can\'t quacking!', ob_get_contents());
        $this->model->setQuackStrategy(new SimpleQuack());
        $this->model->quack();
        $this->assertContains('I can quack!', ob_get_contents());
    }

    public function testSetFlyStrategy()
    {
        $this->model->fly();
        $this->assertContains('I can\'t flying!', ob_get_contents());
        $this->model->setFlyStrategy(new SimpleFly());
        $this->model->fly();
        $this->assertContains('I can fly!', ob_get_contents());
    }
}
