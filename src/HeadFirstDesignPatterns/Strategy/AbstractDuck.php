<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

abstract class AbstractDuck
{
    /**
     * @var FlyBehaviorInterface
     */
    protected FlyBehaviorInterface $flyBehavior;

    /**
     * @var QuackBehaviorInterface
     */
    protected QuackBehaviorInterface $quackBehavior;

    /**
     * @return string
     */
    public function fly(): string
    {
        return $this->flyBehavior->fly();
    }

    /**
     * @return string
     */
    public function quack(): string
    {
        return $this->quackBehavior->quack();
    }

    /**
     * @return string
     */
    abstract public function display(): string;
}
