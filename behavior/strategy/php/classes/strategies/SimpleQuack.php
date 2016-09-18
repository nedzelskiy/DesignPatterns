<?php

namespace DesignPatterns\behavior\strategy\php\strategies;

use DesignPatterns\behavior\strategy\php\interfaces\QuackableInterface;

class SimpleQuack implements QuackableInterface
{

    public function quack()
    {
        echo 'I can quack!' . "\r\n";
    }

}
