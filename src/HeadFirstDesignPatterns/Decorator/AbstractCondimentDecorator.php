<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

abstract class AbstractCondimentDecorator extends AbstractBeverage
{
    /**
     * @param AbstractBeverage $beverage
     */
    public function __construct(protected AbstractBeverage $beverage)
    {
    }
}
