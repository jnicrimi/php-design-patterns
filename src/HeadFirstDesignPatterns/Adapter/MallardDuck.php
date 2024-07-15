<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Adapter;

class MallardDuck implements DuckInterface
{
    public function quack(): void
    {
        echo 'Quack'.PHP_EOL;
    }

    public function fly(): void
    {
        echo 'I\'m flying'.PHP_EOL;
    }
}
