<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Observer;

class StatisticsDisplay implements DisplayElementInterface, ObserverInterface
{
    /**
     * @var float
     */
    private float $maxTemp = 0.0;

    /**
     * @var float
     */
    private float $minTemp = 200;

    /**
     * @var float
     */
    private float $tempSum = 0.0;

    /**
     * @var int
     */
    private int $numReadings = 0;

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

    /**
     * @return void
     */
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
