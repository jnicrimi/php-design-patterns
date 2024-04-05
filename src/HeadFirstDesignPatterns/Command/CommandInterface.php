<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Command;

interface CommandInterface
{
    /**
     * @return void
     */
    public function execute(): void;
}
