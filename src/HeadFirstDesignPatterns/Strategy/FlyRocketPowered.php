<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

class FlyRocketPowered implements FlyBehaviorInterface
{
    /**
     * @return string
     */
    public function fly(): string
    {
        return 'I\'m flying with a rocket';
    }
}
