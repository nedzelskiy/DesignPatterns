<?php

namespace DesignPatterns\Structural\Decorator\Php\Classes;

use DesignPatterns\Structural\Decorator\Php\Classes\Abstracts\RequestProcess;
use DesignPatterns\Structural\Decorator\Php\Classes\Request;

class RequestHelper extends RequestProcess
{

    public function process(Request $request)
    {
        echo 'Process a request called: ' . $request->getProtocol() . "\r\n";
    }

}
