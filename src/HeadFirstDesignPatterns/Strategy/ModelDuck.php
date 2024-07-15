<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

class ModelDuck extends AbstractDuck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new MuteQuack();
    }

    public function display(): string
    {
        return 'I\'m a model duck';
    }
}
