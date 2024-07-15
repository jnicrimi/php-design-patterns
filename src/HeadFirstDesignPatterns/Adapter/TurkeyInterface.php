<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Adapter;

interface TurkeyInterface
{
    public function gobble(): void;

    public function fly(): void;
}
