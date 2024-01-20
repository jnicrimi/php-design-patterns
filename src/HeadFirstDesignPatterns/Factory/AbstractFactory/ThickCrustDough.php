<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class ThickCrustDough implements DoughInterface
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'ThickCrust style extra thick crust dough';
    }
}
