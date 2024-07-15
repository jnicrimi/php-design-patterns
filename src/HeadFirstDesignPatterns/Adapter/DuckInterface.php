<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Adapter;

interface DuckInterface
{
    public function quack(): void;

    public function fly(): void;
}
