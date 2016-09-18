<?php

require_once '../../../config/autoload.php';

use DesignPatterns\behavior\strategy\php\ducks\SimpleDuck;
use DesignPatterns\behavior\strategy\php\ducks\ExoticDuck;
use DesignPatterns\behavior\strategy\php\ducks\RubberDuck;
use DesignPatterns\behavior\strategy\php\ducks\UpgradableDuck;
use DesignPatterns\behavior\strategy\php\strategies\SimpleFly;
use DesignPatterns\behavior\strategy\php\strategies\SimpleQuack;

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
