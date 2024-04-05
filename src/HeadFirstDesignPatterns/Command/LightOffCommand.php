<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Command;

class LightOffCommand implements CommandInterface
{
    /**
     * @var Light
     */
    private Light $light;

    /**
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    /**
     * @return void
     */
    public function execute(): void
    {
        $this->light->off();
    }
}
