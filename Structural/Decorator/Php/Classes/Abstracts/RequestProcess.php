<?php

namespace DesignPatterns\Structural\Decorator\Php\Classes\Abstracts;

use DesignPatterns\Structural\Decorator\Php\Classes\Request;

abstract class RequestProcess
{

    abstract public function process(Request $request);
}
