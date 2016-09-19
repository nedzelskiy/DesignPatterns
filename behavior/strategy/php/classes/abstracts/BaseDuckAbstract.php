<?php

namespace DesignPatterns\behavior\strategy\php\abstracts;

use DesignPatterns\behavior\strategy\php\interfaces\QuackableInterface;
use DesignPatterns\behavior\strategy\php\interfaces\FlyableInterface;
use DesignPatterns\behavior\strategy\php\interfaces\SwimingInterface;
use DesignPatterns\behavior\strategy\php\interfaces\DisplayingInterface;
use DesignPatterns\behavior\strategy\php\interfaces\UpgradableInterface;

use DesignPatterns\behavior\strategy\php\strategies\SimpleFly;
use DesignPatterns\behavior\strategy\php\strategies\SimpleQuack;

abstract class BaseDuckAbstract implements DisplayingInterface, QuackableInterface, FlyableInterface, SwimingInterface, UpgradableInterface
{

    protected $FlyBehavior;
    protected $QuackBehavior;

    public function __construct()
    {
        $this->FlyBehavior = new SimpleFly();
        $this->QuackBehavior = new SimpleQuack();
    }

    public function swim()
    {
        echo 'I can swim!' . "\r\n";
    }

    public function fly()
    {
        echo $this->FlyBehavior->fly();
    }

    public function quack()
    {
        echo $this->QuackBehavior->quack();
    }

    public function setQuackStrategy(QuackableInterface $quackStrategy)
    {
        $this->QuackBehavior = $quackStrategy;
    }

    public function setFlyStrategy(FlyableInterface $flyStrategy)
    {
        $this->FlyBehavior = $flyStrategy;
    }

    abstract public function display();
}
