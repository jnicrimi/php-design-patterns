<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class BlackOlives implements VeggiesInterface
{
    public function __toString(): string
    {
        return 'Black Olives';
    }
}
