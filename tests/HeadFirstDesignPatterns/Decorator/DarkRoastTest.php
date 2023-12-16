<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Decorator;

use HeadFirstDesignPatterns\Decorator\DarkRoast;
use HeadFirstDesignPatterns\Decorator\Mocha;
use HeadFirstDesignPatterns\Decorator\Whip;
use PHPUnit\Framework\TestCase;

class DarkRoastTest extends TestCase
{
    /**
     * @var DarkRoast
     */
    private $beverage;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->beverage = new DarkRoast();
    }

    /**
     * @return void
     */
    public function testGetDescription(): void
    {
        $beverage = $this->beverage;
        $beverage = new Mocha($beverage);
        $beverage = new Mocha($beverage);
        $beverage = new Whip($beverage);
        $this->assertSame('Dark Roast Coffee, Mocha, Mocha, Whip', $beverage->getDescription());
    }

    /**
     * @return void
     */
    public function testCost(): void
    {
        $beverage = $this->beverage;
        $beverage = new Mocha($beverage);
        $beverage = new Mocha($beverage);
        $beverage = new Whip($beverage);
        $this->assertSame(1.49, $beverage->cost());
    }
}
