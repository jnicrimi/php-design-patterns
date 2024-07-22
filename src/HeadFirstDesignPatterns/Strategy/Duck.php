<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

abstract class Duck
{
    protected FlyBehaviorInterface $flyBehavior;

    protected QuackBehaviorInterface $quackBehavior;

    public function setFlyBehavior(FlyBehaviorInterface $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehaviorInterface $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function fly(): string
    {
        return $this->flyBehavior->fly();
    }

    public function quack(): string
    {
        return $this->quackBehavior->quack();
    }

    abstract public function display(): string;
}
