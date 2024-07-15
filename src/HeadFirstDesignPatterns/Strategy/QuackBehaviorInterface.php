<?php

declare (strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

interface QuackBehaviorInterface
{
    public function quack(): string;
}
