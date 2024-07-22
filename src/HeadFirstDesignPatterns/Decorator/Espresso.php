<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

class Espresso extends Beverage
{
    /**
     * @var float
     */
    private const COST = 1.99;

    protected string $description = 'Espresso';

    public function cost(): float
    {
        return self::COST;
    }
}
