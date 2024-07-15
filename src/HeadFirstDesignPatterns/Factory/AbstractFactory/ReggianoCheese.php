<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class ReggianoCheese implements CheeseInterface
{
    public function __toString(): string
    {
        return 'Reggiano Cheese';
    }
}
