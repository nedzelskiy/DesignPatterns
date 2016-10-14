<?php

namespace DesignPatterns\Behavior\Strategy\Php\Classes\Strategies;

use DesignPatterns\Behavior\Strategy\Php\Classes\Interfaces\FlyableInterface;

class NoFly implements FlyableInterface
{

    public function fly()
    {
        echo 'I can\'t flying!' . "\r\n";
    }

}
