<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Observer;

interface DisplayElementInterface
{
    /**
     * @return void
     */
    public function display(): void;
}
