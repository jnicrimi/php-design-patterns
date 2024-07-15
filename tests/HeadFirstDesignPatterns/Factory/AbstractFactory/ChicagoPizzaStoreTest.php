<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Factory\AbstractFactory;

use HeadFirstDesignPatterns\Factory\AbstractFactory\ChicagoPizzaStore;
use PHPUnit\Framework\TestCase;

class ChicagoPizzaStoreTest extends TestCase
{
    private ChicagoPizzaStore $store;

    public function setUp(): void
    {
        parent::setUp();
        $this->store = new ChicagoPizzaStore();
    }

    /**
     * @dataProvider provideOrderPizza
     */
    public function testOrderPizza(string $type, string $expected): void
    {
        $pizza = $this->store->orderPizza($type);
        $this->assertEquals($expected, $pizza->getName());
    }

    public static function provideOrderPizza(): array
    {
        return [
            ['cheese', 'Chicago Style Cheese Pizza'],
            ['veggie', 'Chicago Style Veggie Pizza'],
            ['clam', 'Chicago Style Clam Pizza'],
            ['pepperoni', 'Chicago Style Pepperoni Pizza'],
        ];
    }
}
