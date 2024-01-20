<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class FrozenClams implements ClamsInterface
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Frozen Clams from Chesapeake Bay';
    }
}
