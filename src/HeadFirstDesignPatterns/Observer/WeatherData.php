<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Observer;

class WeatherData implements SubjectInterface
{
    private float $temperature;

    private float $humidity;

    private float $pressure;

    private array $observers = [];

    public function registerObserver(ObserverInterface $observer): void
    {
        if (! in_array($observer, $this->observers, true)) {
            $this->observers[] = $observer;
        }
    }

    public function removeObserver(ObserverInterface $observer): void
    {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
            $this->observers = array_values($this->observers);
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }
}
