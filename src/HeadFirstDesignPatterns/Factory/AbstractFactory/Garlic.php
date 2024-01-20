<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class Garlic implements VeggiesInterface
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Garlic';
    }
}
