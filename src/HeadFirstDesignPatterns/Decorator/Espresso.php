<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

class Espresso extends AbstractBeverage
{
    /**
     * @var float
     */
    private const COST = 1.99;

    /**
     * @var string
     */
    protected string $description = 'Espresso';

    /**
     * @return float
     */
    public function cost(): float
    {
        return self::COST;
    }
}
