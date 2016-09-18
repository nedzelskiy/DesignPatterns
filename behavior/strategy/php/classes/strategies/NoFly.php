<?php

namespace DesignPatterns\behavior\strategy\php\strategies;

use DesignPatterns\behavior\strategy\php\interfaces\FlyableInterface;

class NoFly implements FlyableInterface
{

    public function fly()
    {
        echo 'I can\'t flying!' . "\r\n";
    }

}
