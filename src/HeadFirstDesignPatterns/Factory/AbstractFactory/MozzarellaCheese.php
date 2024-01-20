<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class MozzarellaCheese implements CheeseInterface
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Shredded Mozzarella';
    }
}
