<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Factory\FactoryMethod;

use HeadFirstDesignPatterns\Factory\FactoryMethod\ChicagoPizzaStore;
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
     * @dataProvider provideCreatePizza
     */
    public function testCreatePizza(string $type, string $expected): void
    {
        $pizza = $this->store->createPizza($type);
        $this->assertEquals($expected, $pizza->getName());
    }

    public static function provideCreatePizza(): array
    {
        return [
            ['cheese', 'Chicago Style Deep Dish Cheese Pizza'],
            ['veggie', 'Chicago Deep Dish Veggie Pizza'],
            ['clam', 'Chicago Style Clam Pizza'],
            ['pepperoni', 'Chicago Style Pepperoni Pizza'],
        ];
    }
}
