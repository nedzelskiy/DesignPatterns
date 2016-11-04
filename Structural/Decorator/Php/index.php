<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Structural\Decorator\Php\Classes\RequestHelper;
use DesignPatterns\Structural\Decorator\Php\Classes\Request;
use DesignPatterns\Structural\Decorator\Php\Classes\Decorators\AuthentificateRequest;
use DesignPatterns\Structural\Decorator\Php\Classes\Decorators\StructureRequest;
use DesignPatterns\Structural\Decorator\Php\Classes\Decorators\LogRequest;

$process = new RequestHelper();
$process->process(new Request());

echo "\r\n";
echo "Now with decorated RequestProcess process method! \r\n";
echo "\r\n";

$processDecorated = new StructureRequest(
        new AuthentificateRequest(
            new LogRequest(
                new RequestHelper()
            )
        )
);

$processDecorated->process(new Request());
