<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Observer;

class ForecastDisplay implements DisplayElementInterface, ObserverInterface
{
    private float $currentPressure = 29.92;

    private float $lastPressure;

    public function __construct(private WeatherData $weatherData)
    {
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;
        $this->display();
    }

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
