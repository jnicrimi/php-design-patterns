<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Observer;

class StatisticsDisplay implements DisplayElementInterface, ObserverInterface
{
    private float $maxTemp = 0.0;

    private float $minTemp = 200;

    private float $tempSum = 0.0;

    private int $numReadings = 0;

    public function __construct(private WeatherData $weatherData)
    {
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->tempSum += $temperature;
        $this->numReadings++;
        if ($temperature > $this->maxTemp) {
            $this->maxTemp = $temperature;
        }
        if ($temperature < $this->minTemp) {
            $this->minTemp = $temperature;
        }
        $this->display();
    }

    public function display(): void
    {
        if ($this->numReadings === 0) {
            echo "No readings available\n";

            return;
        }
        echo sprintf(
            'Avg/Max/Min temperature = %.1f/%.1f/%.1f',
            $this->tempSum / $this->numReadings,
            $this->maxTemp,
            $this->minTemp
        );
        echo "\n";
    }
}
