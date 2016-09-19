<?php

namespace DesignPatterns\behavior\strategy\php\interfaces;

use DesignPatterns\behavior\strategy\php\interfaces\QuackableInterface;
use DesignPatterns\behavior\strategy\php\interfaces\FlyableInterface;

interface UpgradableInterface
{

    public function setQuackStrategy(QuackableInterface $quackStrategy);

    public function setFlyStrategy(FlyableInterface $flyStrategy);
}
