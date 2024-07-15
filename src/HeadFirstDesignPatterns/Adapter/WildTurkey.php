<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Adapter;

class WildTurkey implements TurkeyInterface
{
    public function gobble(): void
    {
        echo 'Gobble gobble'.PHP_EOL;
    }

    public function fly(): void
    {
        echo 'I\'m flying a short distance'.PHP_EOL;
    }
}
