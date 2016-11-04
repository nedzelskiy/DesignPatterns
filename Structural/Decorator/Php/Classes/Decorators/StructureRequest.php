<?php

namespace DesignPatterns\Structural\Decorator\Php\Classes\Decorators;

use DesignPatterns\Structural\Decorator\Php\Classes\Abstracts\RequestProcessDecorator;
use DesignPatterns\Structural\Decorator\Php\Classes\Request;

class StructureRequest extends RequestProcessDecorator
{

    public function process(Request $request)
    {
        $this->requestProcess->process($request);

        echo 'Structurize request params!' . "\r\n";
        $request->changeParam('url', '/home');
    }

}
