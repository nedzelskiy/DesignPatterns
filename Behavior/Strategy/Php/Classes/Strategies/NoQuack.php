<?php

namespace DesignPatterns\Behavior\Strategy\Php\Classes\Strategies;

use DesignPatterns\Behavior\Strategy\Php\Classes\Interfaces\QuackableInterface;

class NoQuack implements QuackableInterface
{

    public function quack()
    {
        echo 'I can\'t quacking!' . "\r\n";
    }

}
