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
     * @param FlyBehaviorInterface $flyBehavior
     *
     * @return void
     */
    public function setFlyBehavior(FlyBehaviorInterface $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    /**
     * @param QuackBehaviorInterface $quackBehavior
     *
     * @return void
     */
    public function setQuackBehavior(QuackBehaviorInterface $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }

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
