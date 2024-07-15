<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

class DarkRoast extends AbstractBeverage
{
    /**
     * @var float
     */
    private const COST = 0.99;

    protected string $description = 'Dark Roast Coffee';

    public function cost(): float
    {
        return self::COST;
    }
}
