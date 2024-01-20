<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

interface PepperoniInterface
{
    /**
     * @return string
     */
    public function __toString(): string;
}
