<?php

namespace DesignPatterns\behavior\strategy\php\strategies;

use DesignPatterns\behavior\strategy\php\interfaces\QuackableInterface;

class NoQuack implements QuackableInterface
{

    public function quack()
    {
        echo 'I can\'t quacking!' . "\r\n";
    }

}
