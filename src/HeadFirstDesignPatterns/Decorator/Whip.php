<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

class Whip extends AbstractCondimentDecorator
{
    /**
     * @var float
     */
    private const COST = 0.10;

    /**
     * @var string
     */
    protected $description = 'Whip';

    /**
     * @param AbstractBeverage $beverage
     */
    public function __construct(AbstractBeverage $beverage)
    {
        $this->beverage = $beverage;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return sprintf('%s, %s', $this->beverage->getDescription(), $this->description);
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return $this->beverage->cost() + self::COST;
    }
}
