<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class FreshClams implements ClamsInterface
{
    public function __toString(): string
    {
        return 'Fresh Clams from Long Island Sound';
    }
}
