<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

abstract class AbstractCondimentDecorator extends AbstractBeverage
{
    public function __construct(protected AbstractBeverage $beverage)
    {
    }
}
