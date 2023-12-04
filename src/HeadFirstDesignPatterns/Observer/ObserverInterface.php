<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Observer;

interface ObserverInterface
{
    /**
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     *
     * @return void
     */
    public function update(float $temperature, float $humidity, float $pressure): void;
}
