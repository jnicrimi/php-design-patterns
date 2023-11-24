<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

class Quack implements QuackBehaviorInterface
{
    /**
     * @return string
     */
    public function quack(): string
    {
        return 'Quack';
    }
}
