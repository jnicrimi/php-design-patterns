<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Command;

class LightOnCommand implements CommandInterface
{
    private Light $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->on();
    }
}
