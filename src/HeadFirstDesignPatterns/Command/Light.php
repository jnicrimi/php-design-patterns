<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Command;

class Light
{
    /**
     * @return void
     */
    public function on(): void
    {
        echo 'Light is on'.PHP_EOL;
    }

    /**
     * @return void
     */
    public function off(): void
    {
        echo 'Light is off'.PHP_EOL;
    }
}
