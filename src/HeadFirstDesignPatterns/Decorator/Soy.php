<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

class Soy extends CondimentDecorator
{
    /**
     * @var float
     */
    private const COST = 0.15;

    protected string $description = 'Soy';

    public function getDescription(): string
    {
        return sprintf('%s, %s', $this->beverage->getDescription(), $this->description);
    }

    public function cost(): float
    {
        return $this->beverage->cost() + self::COST;
    }
}
