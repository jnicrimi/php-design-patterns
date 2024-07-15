<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Observer;

use HeadFirstDesignPatterns\Observer\CurrentConditionsDisplay;
use HeadFirstDesignPatterns\Observer\ForecastDisplay;
use HeadFirstDesignPatterns\Observer\StatisticsDisplay;
use HeadFirstDesignPatterns\Observer\WeatherData;
use PHPUnit\Framework\TestCase;

class WeatherDataTest extends TestCase
{
    public function testSetMeasurements(): void
    {
        $weatherData = new WeatherData();
        new CurrentConditionsDisplay($weatherData);
        new StatisticsDisplay($weatherData);
        new ForecastDisplay($weatherData);
        $weatherData->setMeasurements(80, 65, 30.4);
        $expected = <<<'EOF'
Current conditions: 80.0F degrees and 65.0% humidity
Avg/Max/Min temperature = 80.0/80.0/80.0
Forecast: Improving weather on the way!

EOF;
        $this->expectOutputString($expected);
    }
}
