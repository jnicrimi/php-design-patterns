<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

interface FlyBehaviorInterface
{
    /**
     * @return string
     */
    public function fly(): string;
}
