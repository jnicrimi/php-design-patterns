<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

class Whip extends AbstractCondimentDecorator
{
    /**
     * @var float
     */
    private const COST = 0.10;

    protected string $description = 'Whip';

    public function getDescription(): string
    {
        return sprintf('%s, %s', $this->beverage->getDescription(), $this->description);
    }

    public function cost(): float
    {
        return $this->beverage->cost() + self::COST;
    }
}
