<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

interface DoughInterface
{
    /**
     * @return string
     */
    public function __toString(): string;
}
