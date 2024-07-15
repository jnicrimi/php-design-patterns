<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Command;

class GarageDoor
{
    public function up(): void
    {
        echo 'Garage door is open'.PHP_EOL;
    }

    public function down(): void
    {
        echo 'Garage door is closed'.PHP_EOL;
    }

    public function stop(): void
    {
        echo 'Garage door is stopped'.PHP_EOL;
    }

    public function lightOn(): void
    {
        echo 'Garage light is on'.PHP_EOL;
    }

    public function lightOff(): void
    {
        echo 'Garage light is off'.PHP_EOL;
    }
}
