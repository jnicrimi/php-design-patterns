<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class ThinCrustDough implements DoughInterface
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Thin Crust Dough';
    }
}
