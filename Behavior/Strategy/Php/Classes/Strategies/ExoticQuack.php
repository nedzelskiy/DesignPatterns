<?php

namespace DesignPatterns\Behavior\Strategy\Php\Classes\Strategies;

use DesignPatterns\Behavior\Strategy\Php\Classes\Interfaces\QuackableInterface;

class ExoticQuack implements QuackableInterface
{

    public function quack()
    {
        echo 'I can quack exotic!' . "\r\n";
    }

}
