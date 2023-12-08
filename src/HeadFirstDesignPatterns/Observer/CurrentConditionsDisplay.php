<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Observer;

class CurrentConditionsDisplay implements DisplayElementInterface, ObserverInterface
{
    /**
     * @var float
     */
    private float $temperature;

    /**
     * @var float
     */
    private float $humidity;

    /**
     * @var WeatherData
     */
    private WeatherData $weatherData;

    /**
     * @param WeatherData $weatherData
     */
    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    /**
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     *
     * @return void
     */
    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    /**
     * @return void
     */
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
