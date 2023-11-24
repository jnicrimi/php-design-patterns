<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

class FlyNoWay implements FlyBehaviorInterface
{
    /**
     * @return string
     */
    public function fly(): string
    {
        return 'I can\'t fly';
    }
}
