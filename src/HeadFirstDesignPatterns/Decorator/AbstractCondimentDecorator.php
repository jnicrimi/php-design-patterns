<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

abstract class AbstractCondimentDecorator extends AbstractBeverage
{
    /**
     * @var AbstractBeverage
     */
    protected $beverage;

    /**
     * @param AbstractBeverage $beverage
     */
    public function __construct(AbstractBeverage $beverage)
    {
        $this->beverage = $beverage;
    }
}
