<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class PlumTomatoSauce implements SauceInterface
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Tomato sauce with plum tomatoes';
    }
}
