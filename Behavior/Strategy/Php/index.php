<?php

require_once '../../../vendor/autoload.php';

use DesignPatterns\Behavior\Strategy\Php\Classes\Ducks\SimpleDuck;
use DesignPatterns\Behavior\Strategy\Php\Classes\Ducks\ExoticDuck;
use DesignPatterns\Behavior\Strategy\Php\Classes\Ducks\RubberDuck;
use DesignPatterns\Behavior\Strategy\Php\Classes\Ducks\UpgradableDuck;
use DesignPatterns\Behavior\Strategy\Php\Classes\Strategies\SimpleFly;
use DesignPatterns\Behavior\Strategy\Php\Classes\Strategies\SimpleQuack;

$upgradableDuck = new UpgradableDuck();

$duckArr = [
    new SimpleDuck(),
    new ExoticDuck(),
    new RubberDuck(),
    $upgradableDuck
];

foreach ($duckArr as $duck) {

    echo "\r\n\r\n";

    $duck->display();
    $duck->swim();
    $duck->fly();
    $duck->quack();

}

$upgradableDuck->setQuackStrategy(new SimpleQuack());
$upgradableDuck->setFlyStrategy(new SimpleFly());
echo 'but now...' . "\r\n";
$upgradableDuck->quack();
$upgradableDuck->fly();

echo "\r\n\r\n";
