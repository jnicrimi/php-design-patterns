<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Factory\AbstractFactory;

use HeadFirstDesignPatterns\Factory\AbstractFactory\ChicagoPizzaStore;
use PHPUnit\Framework\TestCase;

class ChicagoPizzaStoreTest extends TestCase
{
    /**
     * @var ChicagoPizzaStore
     */
    private ChicagoPizzaStore $store;

    /**
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->store = new ChicagoPizzaStore();
    }

    /**
     * @dataProvider provideOrderPizza
     *
     * @param string $type
     * @param string $expected
     *
     * @return void
     */
    public function testOrderPizza(string $type, string $expected): void
    {
        $pizza = $this->store->orderPizza($type);
        $this->assertEquals($expected, $pizza->getName());
    }

    /**
     * @return array
     */
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
