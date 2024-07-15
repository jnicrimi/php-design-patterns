<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Command;

interface CommandInterface
{
    public function execute(): void;
}
