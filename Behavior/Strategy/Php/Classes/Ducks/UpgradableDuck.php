<?php

namespace DesignPatterns\Behavior\Strategy\Php\Classes\Ducks;

use DesignPatterns\Behavior\Strategy\Php\Classes\Abstracts\BaseDuckAbstract;

use DesignPatterns\Behavior\Strategy\Php\Classes\Strategies\NoQuack;
use DesignPatterns\Behavior\Strategy\Php\Classes\Strategies\NoFly;

class UpgradableDuck extends BaseDuckAbstract
{
    public function __construct()
    {
        parent::__construct();
        $this->QuackBehavior = new NoQuack();
        $this->FlyBehavior = new NoFly();
    }

    public function display()
    {
        echo 'I am an UpgradableDuck!' . "\r\n";
    }

}
