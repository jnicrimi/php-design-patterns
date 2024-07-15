<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class ParmesanCheese implements CheeseInterface
{
    public function __toString(): string
    {
        return 'Shredded Parmesan';
    }
}
