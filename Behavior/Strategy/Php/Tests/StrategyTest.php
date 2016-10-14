<?php

namespace DesignPatterns\Behavior\Strategy\Php\Tests;

class StrategyTest
{

    public static function suite()
    {
        require_once "../../../vendor/autoload.php";

        $suite = new \PHPUnit_Framework_TestSuite();

        $suite->addTestSuite('DesignPatterns\Behavior\Strategy\Php\Tests\ExoticDuckTest');
        $suite->addTestSuite('DesignPatterns\Behavior\Strategy\Php\Tests\RubberDuckTest');
        $suite->addTestSuite('DesignPatterns\Behavior\Strategy\Php\Tests\SimpleDuckTest');
        $suite->addTestSuite('DesignPatterns\Behavior\Strategy\Php\Tests\UpgradableDuckTest');

        return $suite;
    }

}
