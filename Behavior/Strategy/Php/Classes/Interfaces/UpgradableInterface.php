<?php

namespace DesignPatterns\Behavior\Strategy\Php\Classes\Interfaces;

use DesignPatterns\behavior\strategy\php\classes\Interfaces\QuackableInterface;
use DesignPatterns\Behavior\Strategy\Php\Classes\Interfaces\FlyableInterface;

interface UpgradableInterface
{

    public function setQuackStrategy(QuackableInterface $quackStrategy);

    public function setFlyStrategy(FlyableInterface $flyStrategy);
}
