<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Decorator;

abstract class CondimentDecorator extends Beverage
{
    public function __construct(protected Beverage $beverage)
    {
    }
}
