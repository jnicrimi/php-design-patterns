<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Adapter;

interface DuckInterface
{
    /**
     * @return void
     */
    public function quack(): void;

    /**
     * @return void
     */
    public function fly(): void;
}
