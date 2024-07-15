<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly(): string
    {
        return 'I\'m flying!!';
    }
}
