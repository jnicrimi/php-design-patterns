<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Factory\AbstractFactory;

use HeadFirstDesignPatterns\Factory\AbstractFactory\NYPizzaStore;
use PHPUnit\Framework\TestCase;

class NYPizzaStoreTest extends TestCase
{
    private NYPizzaStore $store;

    public function setUp(): void
    {
        parent::setUp();
        $this->store = new NYPizzaStore();
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
            ['cheese', 'New York Style Cheese Pizza'],
            ['veggie', 'New York Style Veggie Pizza'],
            ['clam', 'New York Style Clam Pizza'],
            ['pepperoni', 'New York Style Pepperoni Pizza'],
        ];
    }
}
