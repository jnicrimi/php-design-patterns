<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class SlicedPepperoni implements PepperoniInterface
{
    public function __toString(): string
    {
        return 'Sliced Pepperoni';
    }
}
