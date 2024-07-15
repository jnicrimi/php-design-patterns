<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Decorator;

use HeadFirstDesignPatterns\Decorator\Espresso;
use PHPUnit\Framework\TestCase;

class EspressoTest extends TestCase
{
    private Espresso $beverage;

    protected function setUp(): void
    {
        $this->beverage = new Espresso();
    }

    public function testGetDescription(): void
    {
        $this->assertSame('Espresso', $this->beverage->getDescription());
    }

    public function testCost(): void
    {
        $this->assertSame(1.99, $this->beverage->cost());
    }
}
