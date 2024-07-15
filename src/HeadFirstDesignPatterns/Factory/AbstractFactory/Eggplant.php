<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class Eggplant implements VeggiesInterface
{
    public function __toString(): string
    {
        return 'Eggplant';
    }
}
