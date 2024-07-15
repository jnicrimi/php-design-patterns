<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class MozzarellaCheese implements CheeseInterface
{
    public function __toString(): string
    {
        return 'Shredded Mozzarella';
    }
}
