<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

abstract class AbstractDuck
{
    /**
     * @return string
     */
    abstract public function display(): string;
}
