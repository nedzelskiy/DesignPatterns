<?php

namespace DesignPatterns\behavior\strategy\php\ducks;

use DesignPatterns\behavior\strategy\php\abstracts\BaseDuckAbstract;
use DesignPatterns\behavior\strategy\php\strategies\ExoticQuack;

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
