<?php

namespace DesignPatterns\behavior\strategy\php\ducks;

use DesignPatterns\behavior\strategy\php\abstracts\BaseDuckAbstract;

use DesignPatterns\behavior\strategy\php\strategies\NoQuack;
use DesignPatterns\behavior\strategy\php\strategies\NoFly;

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
