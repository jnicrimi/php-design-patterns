<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Observer;

class WeatherData implements SubjectInterface
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
     * @var float
     */
    private float $pressure;

    /**
     * @var array
     */
    private array $observers = [];

    /**
     * @param ObserverInterface $observer
     *
     * @return void
     */
    public function registerObserver(ObserverInterface $observer): void
    {
        if (! in_array($observer, $this->observers, true)) {
            $this->observers[] = $observer;
        }
    }

    /**
     * @param ObserverInterface $observer
     *
     * @return void
     */
    public function removeObserver(ObserverInterface $observer): void
    {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
            $this->observers = array_values($this->observers);
        }
    }

    /**
     * @return void
     */
    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    /**
     * @return void
     */
    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    /**
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     *
     * @return void
     */
    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    /**
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * @return float
     */
    public function getHumidity(): float
    {
        return $this->humidity;
    }

    /**
     * @return float
     */
    public function getPressure(): float
    {
        return $this->pressure;
    }
}
