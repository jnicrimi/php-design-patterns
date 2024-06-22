<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Adapter;

class TurkeyAdapter implements DuckInterface
{
    /**
     * @param TurkeyInterface $turkey
     */
    public function __construct(private readonly TurkeyInterface $turkey)
    {
    }

    /**
     * @return void
     */
    public function quack(): void
    {
        $this->turkey->gobble();
    }

    /**
     * @return void
     */
    public function fly(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}
