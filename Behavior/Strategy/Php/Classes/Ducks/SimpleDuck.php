<?php

namespace DesignPatterns\Behavior\Strategy\Php\Classes\Ducks;

use DesignPatterns\Behavior\Strategy\Php\Classes\Abstracts\BaseDuckAbstract;

class SimpleDuck extends BaseDuckAbstract
{

    public function display()
    {
        echo 'I am a SimpleDuck!' . "\r\n";
    }

}
