<?php

namespace DesignPatterns\Structural\Decorator\Php\Classes\Abstracts;

use DesignPatterns\Structural\Decorator\Php\Classes\Abstracts\RequestProcess;

abstract class RequestProcessDecorator extends RequestProcess
{

    protected $requestProcess;

    public function __construct(RequestProcess $requestProcess)
    {
        $this->requestProcess = $requestProcess;
    }

}
