<?php

namespace DesignPatterns\Structural\Decorator\Php\Tests;

class DecoratorTest
{

    public static function suite()
    {
        require_once "../../../vendor/autoload.php";

        $suite = new \PHPUnit_Framework_TestSuite();

        $suite->addTestSuite('DesignPatterns\Structural\Decorator\Php\Tests\RequestHelperTest');
        $suite->addTestSuite('DesignPatterns\Structural\Decorator\Php\Tests\AuthentificateRequestTest');
        $suite->addTestSuite('DesignPatterns\Structural\Decorator\Php\Tests\LogRequestTest');
        $suite->addTestSuite('DesignPatterns\Structural\Decorator\Php\Tests\StructureRequestTest');

        return $suite;
    }

}
