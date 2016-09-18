<?php

namespace DesignPatterns\behavior\strategy\php\ducks;

use DesignPatterns\behavior\strategy\php\abstracts\BaseDuckAbstract;

class SimpleDuck extends BaseDuckAbstract
{
    
    public function display()
    {
        echo 'I am a SimpleDuck!' . "\r\n";
    }

}
