<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Adapter;

class TurkeyAdapter implements DuckInterface
{
    public function __construct(private readonly TurkeyInterface $turkey)
    {
    }

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function fly(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}
