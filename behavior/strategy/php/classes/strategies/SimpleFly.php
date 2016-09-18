<?php

namespace DesignPatterns\behavior\strategy\php\strategies;

use DesignPatterns\behavior\strategy\php\interfaces\FlyableInterface;

class SimpleFly implements FlyableInterface
{

    public function fly()
    {
        echo 'I can fly!' . "\r\n";
    }

}
