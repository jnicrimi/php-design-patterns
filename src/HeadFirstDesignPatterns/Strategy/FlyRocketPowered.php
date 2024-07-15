<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

class FlyRocketPowered implements FlyBehaviorInterface
{
    public function fly(): string
    {
        return 'I\'m flying with a rocket';
    }
}
