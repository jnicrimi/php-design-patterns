<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

abstract class AbstractBeverage
{
    /**
     * @var string
     */
    protected $description = 'Unknown Beverage';

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    abstract public function cost(): float;
}
