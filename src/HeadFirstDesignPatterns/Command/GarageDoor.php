<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Command;

class GarageDoor
{
    /**
     * @return void
     */
    public function up(): void
    {
        echo 'Garage door is open'.PHP_EOL;
    }

    /**
     * @return void
     */
    public function down(): void
    {
        echo 'Garage door is closed'.PHP_EOL;
    }

    /**
     * @return void
     */
    public function stop(): void
    {
        echo 'Garage door is stopped'.PHP_EOL;
    }

    /**
     * @return void
     */
    public function lightOn(): void
    {
        echo 'Garage light is on'.PHP_EOL;
    }

    /**
     * @return void
     */
    public function lightOff(): void
    {
        echo 'Garage light is off'.PHP_EOL;
    }
}
