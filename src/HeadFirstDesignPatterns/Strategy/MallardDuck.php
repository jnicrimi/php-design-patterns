<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

class MallardDuck extends AbstractDuck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display(): string
    {
        return 'I\'m a real Mallard duck';
    }
}
