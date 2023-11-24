<?php

declare (strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

interface QuackBehaviorInterface
{
    /**
     * @return string
     */
    public function quack(): string;
}
