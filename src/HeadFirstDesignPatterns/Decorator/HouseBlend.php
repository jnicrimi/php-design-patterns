<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

class HouseBlend extends AbstractBeverage
{
    /**
     * @var float
     */
    private const COST = 0.89;

    /**
     * @var string
     */
    protected $description = 'House Blend Coffee';

    /**
     * @return float
     */
    public function cost(): float
    {
        return self::COST;
    }
}
