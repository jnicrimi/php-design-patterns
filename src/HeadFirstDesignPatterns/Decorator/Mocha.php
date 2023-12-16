<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

class Mocha extends AbstractCondimentDecorator
{
    /**
     * @var float
     */
    private const COST = 0.20;

    /**
     * @var string
     */
    protected $description = 'Mocha';

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return sprintf('%s, %s', $this->beverage->getDescription(), $this->description);
    }

    public function cost(): float
    {
        return $this->beverage->cost() + self::COST;
    }
}
