<?php

namespace DesignPatterns\Structural\Decorator\Php\Classes;

class Log
{

    protected $_message;

    public function __construct($message)
    {
        $this->message = $message;
    }

}
