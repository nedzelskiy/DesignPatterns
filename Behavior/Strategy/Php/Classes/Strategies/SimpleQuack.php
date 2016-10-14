<?php

namespace DesignPatterns\Behavior\Strategy\Php\Classes\Strategies;

use DesignPatterns\Behavior\Strategy\Php\Classes\Interfaces\QuackableInterface;

class SimpleQuack implements QuackableInterface
{

    public function quack()
    {
        echo 'I can quack!' . "\r\n";
    }

}
