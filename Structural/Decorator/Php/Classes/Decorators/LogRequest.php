<?php

namespace DesignPatterns\Structural\Decorator\Php\Classes\Decorators;

use DesignPatterns\Structural\Decorator\Php\Classes\Abstracts\RequestProcessDecorator;
use DesignPatterns\Structural\Decorator\Php\Classes\Request;
use DesignPatterns\Structural\Decorator\Php\Classes\Logger;
use DesignPatterns\Structural\Decorator\Php\Classes\Log;

class LogRequest extends RequestProcessDecorator
{

    public function process(Request $request)
    {
        echo 'Logging a new request!' . "\r\n";
        Logger::addLog(new Log($request->getProtocol()));
        
        $this->requestProcess->process($request);
    }

}
