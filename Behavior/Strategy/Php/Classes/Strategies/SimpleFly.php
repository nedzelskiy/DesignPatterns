<?php

namespace DesignPatterns\Behavior\Strategy\Php\Classes\Strategies;

use DesignPatterns\Behavior\Strategy\Php\Classes\Interfaces\FlyableInterface;

class SimpleFly implements FlyableInterface
{

    public function fly()
    {
        echo 'I can fly!' . "\r\n";
    }

}
