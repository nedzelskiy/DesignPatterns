<?php

namespace DesignPatterns\behavior\strategy\php\strategies;

use DesignPatterns\behavior\strategy\php\interfaces\QuackableInterface;

class ExoticQuack implements QuackableInterface
{

    public function quack()
    {
        echo 'I can quack exotic!' . "\r\n";
    }

}
