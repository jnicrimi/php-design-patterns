<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class MarinaraSauce implements SauceInterface
{
    public function __toString(): string
    {
        return 'Marinara Sauce';
    }
}
