<?php

namespace DesignPatterns\Behavior\Strategy\Php\Classes\abstracts;

use DesignPatterns\Behavior\Strategy\Php\Classes\Interfaces\QuackableInterface;
use DesignPatterns\Behavior\Strategy\Php\Classes\Interfaces\FlyableInterface;
use DesignPatterns\Behavior\Strategy\Php\Classes\Interfaces\SwimingInterface;
use DesignPatterns\Behavior\Strategy\Php\Classes\Interfaces\DisplayingInterface;
use DesignPatterns\Behavior\Strategy\Php\Classes\Interfaces\UpgradableInterface;

use DesignPatterns\Behavior\Strategy\Php\Classes\Strategies\SimpleFly;
use DesignPatterns\Behavior\Strategy\Php\Classes\Strategies\SimpleQuack;

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
