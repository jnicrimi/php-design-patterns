<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Observer;

interface ObserverInterface
{
    public function update(float $temperature, float $humidity, float $pressure): void;
}
