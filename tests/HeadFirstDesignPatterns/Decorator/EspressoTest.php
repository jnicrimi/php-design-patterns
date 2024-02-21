<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Decorator;

use HeadFirstDesignPatterns\Decorator\Espresso;
use PHPUnit\Framework\TestCase;

class EspressoTest extends TestCase
{
    /**
     * @var Espresso
     */
    private Espresso $beverage;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->beverage = new Espresso();
    }

    /**
     * @return void
     */
    public function testGetDescription(): void
    {
        $this->assertSame('Espresso', $this->beverage->getDescription());
    }

    /**
     * @return void
     */
    public function testCost(): void
    {
        $this->assertSame(1.99, $this->beverage->cost());
    }
}
