<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Adapter;

interface TurkeyInterface
{
    /**
     * @return void
     */
    public function gobble(): void;

    /**
     * @return void
     */
    public function fly(): void;
}
