<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class RedPepper implements VeggiesInterface
{
    public function __toString(): string
    {
        return 'Red Pepper';
    }
}
