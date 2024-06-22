<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Adapter;

class WildTurkey implements TurkeyInterface
{
    /**
     * @return void
     */
    public function gobble(): void
    {
        echo 'Gobble gobble'.PHP_EOL;
    }

    /**
     * @return void
     */
    public function fly(): void
    {
        echo 'I\'m flying a short distance'.PHP_EOL;
    }
}
