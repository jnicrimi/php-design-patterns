<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Observer;

class ForecastDisplay implements DisplayElementInterface, ObserverInterface
{
    /**
     * @var float
     */
    private float $currentPressure = 29.92;

    /**
     * @var float
     */
    private float $lastPressure;

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
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;
        $this->display();
    }

    /**
     * @return void
     */
    public function display(): void
    {
        $forecast = 'Forecast: ';
        if ($this->currentPressure > $this->lastPressure) {
            $forecast .= 'Improving weather on the way!';
        } elseif ($this->currentPressure === $this->lastPressure) {
            $forecast .= 'More of the same';
        } elseif ($this->currentPressure < $this->lastPressure) {
            $forecast .= 'Watch out for cooler, rainy weather';
        }
        echo $forecast."\n";
    }
}
