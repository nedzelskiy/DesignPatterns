<?php

namespace DesignPatterns\Structural\Decorator\Php\Classes\Decorators;

use DesignPatterns\Structural\Decorator\Php\Classes\Abstracts\RequestProcessDecorator;
use DesignPatterns\Structural\Decorator\Php\Classes\Request;

class AuthentificateRequest extends RequestProcessDecorator
{

    public function process(Request $request)
    {
        $this->requestProcess->process($request);

        echo 'Check Authentification!' . "\r\n";
        $request->changeParam('id', '123');
    }

}
