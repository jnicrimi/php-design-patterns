<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Decorator;

use HeadFirstDesignPatterns\Decorator\HouseBlend;
use HeadFirstDesignPatterns\Decorator\Mocha;
use HeadFirstDesignPatterns\Decorator\Soy;
use HeadFirstDesignPatterns\Decorator\Whip;
use PHPUnit\Framework\TestCase;

class HouseBlendTest extends TestCase
{
    /**
     * @var HouseBlend
     */
    private HouseBlend $beverage;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->beverage = new HouseBlend();
    }

    /**
     * @return void
     */
    public function testGetDescription(): void
    {
        $beverage = $this->beverage;
        $beverage = new Soy($beverage);
        $beverage = new Mocha($beverage);
        $beverage = new Whip($beverage);
        $this->assertSame('House Blend Coffee, Soy, Mocha, Whip', $beverage->getDescription());
    }

    /**
     * @return void
     */
    public function testCost(): void
    {
        $beverage = $this->beverage;
        $beverage = new Soy($beverage);
        $beverage = new Mocha($beverage);
        $beverage = new Whip($beverage);
        $this->assertSame(1.34, $beverage->cost());
    }
}
