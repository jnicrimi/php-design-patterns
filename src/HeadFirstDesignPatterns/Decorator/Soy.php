<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

class Soy extends AbstractCondimentDecorator
{
    /**
     * @var float
     */
    private const COST = 0.15;

    /**
     * @var string
     */
    protected string $description = 'Soy';

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
