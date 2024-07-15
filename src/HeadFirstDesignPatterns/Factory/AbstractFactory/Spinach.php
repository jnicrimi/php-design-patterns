<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class Spinach implements VeggiesInterface
{
    public function __toString(): string
    {
        return 'Spinach';
    }
}
