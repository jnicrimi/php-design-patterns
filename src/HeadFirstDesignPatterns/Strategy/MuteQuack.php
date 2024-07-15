<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

class MuteQuack implements QuackBehaviorInterface
{
    public function quack(): string
    {
        return '<< Silence >>';
    }
}
