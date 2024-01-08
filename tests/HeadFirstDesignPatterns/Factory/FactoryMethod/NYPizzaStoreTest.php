<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Factory\FactoryMethod;

use HeadFirstDesignPatterns\Factory\FactoryMethod\NYPizzaStore;
use PHPUnit\Framework\TestCase;

class NYPizzaStoreTest extends TestCase
{
    /**
     * @var NYPizzaStore
     */
    private $store;

    public function setUp(): void
    {
        parent::setUp();
        $this->store = new NYPizzaStore();
    }

    /**
     * @dataProvider provideCreatePizza
     *
     * @param string $type
     * @param string $expected
     *
     * @return void
     */
    public function testCreatePizza(string $type, string $expected): void
    {
        $pizza = $this->store->createPizza($type);
        $this->assertEquals($expected, $pizza->getName());
    }

    /**
     * @return array
     */
    public static function provideCreatePizza(): array
    {
        return [
            ['cheese', 'NY Style Sauce and Cheese Pizza'],
            ['veggie', 'NY Style Veggie Pizza'],
            ['clam', 'NY Style Clam Pizza'],
            ['pepperoni', 'NY Style Pepperoni Pizza'],
        ];
    }
}
