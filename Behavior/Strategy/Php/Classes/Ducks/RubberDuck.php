<?php

namespace DesignPatterns\Behavior\Strategy\Php\Classes\ducks;

use DesignPatterns\Behavior\Strategy\Php\Classes\Abstracts\BaseDuckAbstract;

use DesignPatterns\Behavior\Strategy\Php\Classes\Strategies\NoQuack;
use DesignPatterns\Behavior\Strategy\Php\Classes\Strategies\NoFly;

class RubberDuck extends BaseDuckAbstract
{

    public function __construct()
    {
        parent::__construct();
        $this->QuackBehavior = new NoQuack();
        $this->FlyBehavior = new NoFly();
    }

    public function display()
    {
        echo 'I am a RubberDuck!' . "\r\n";
    }

}
