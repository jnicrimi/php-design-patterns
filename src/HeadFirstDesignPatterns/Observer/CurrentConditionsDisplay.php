<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Observer;

class CurrentConditionsDisplay implements DisplayElementInterface, ObserverInterface
{
    private float $temperature;

    private float $humidity;

    public function __construct(private WeatherData $weatherData)
    {
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display(): void
    {
        echo sprintf(
            'Current conditions: %.1fF degrees and %.1f%% humidity',
            $this->temperature,
            $this->humidity
        );
        echo "\n";
    }
}
