<?php

namespace DesignPatterns\Behavior\Strategy\Php\Classes\Ducks;

use DesignPatterns\Behavior\Strategy\Php\Classes\Abstracts\BaseDuckAbstract;
use DesignPatterns\Behavior\Strategy\Php\Classes\Strategies\ExoticQuack;

class ExoticDuck extends BaseDuckAbstract
{

    public function __construct()
    {
        parent::__construct();
        $this->QuackBehavior = new ExoticQuack();
    }

    public function display()
    {
        echo 'I am an ExoticDuck!' . "\r\n";
    }

}
