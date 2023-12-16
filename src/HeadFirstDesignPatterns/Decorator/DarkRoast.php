<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

class DarkRoast extends AbstractBeverage
{
    /**
     * @var float
     */
    private const COST = 0.99;

    /**
     * @var string
     */
    protected $description = 'Dark Roast Coffee';

    /**
     * @return float
     */
    public function cost(): float
    {
        return self::COST;
    }
}
