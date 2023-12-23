<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Factory\SimpleFactory;

use HeadFirstDesignPatterns\Factory\SimpleFactory\PizzaStore;
use HeadFirstDesignPatterns\Factory\SimpleFactory\SimplePizzaFactory;
use PHPUnit\Framework\TestCase;

class PizzaStoreTest extends TestCase
{
    /**
     * @dataProvider provideOrderPizza
     *
     * @param string $type
     * @param string $outputString
     *
     * @return void
     */
    public function testOrderPizza(string $type, string $outputString)
    {
        $simplePizzaFactory = new SimplePizzaFactory();
        $pizzaStore = new PizzaStore($simplePizzaFactory);
        $pizza = $pizzaStore->orderPizza($type);
        echo 'We ordered a '.$pizza->getName().PHP_EOL;
        echo $pizza.PHP_EOL;

        $this->expectOutputString($outputString);
    }

    /**
     * @return array
     */
    public static function provideOrderPizza(): array
    {
        $cheeseOutputString = <<<'EOF'
Preparing Cheese Pizza
Baking Cheese Pizza
Cutting Cheese Pizza
Boxing Cheese Pizza
We ordered a Cheese Pizza
---- Cheese Pizza ----
Regular Crust
Marinara Pizza Sauce
Fresh Mozzarella
Parmesan


EOF;
        $pepperoniOutputString = <<<'EOF'
Preparing Pepperoni Pizza
Baking Pepperoni Pizza
Cutting Pepperoni Pizza
Boxing Pepperoni Pizza
We ordered a Pepperoni Pizza
---- Pepperoni Pizza ----
Crust
Marinara sauce
Sliced Pepperoni
Sliced Onion
Grated parmesan cheese


EOF;
        $clamOutputString = <<<'EOF'
Preparing Clam Pizza
Baking Clam Pizza
Cutting Clam Pizza
Boxing Clam Pizza
We ordered a Clam Pizza
---- Clam Pizza ----
Thin crust
White garlic sauce
Clams
Grated parmesan cheese


EOF;
        $veggieOutputString = <<<'EOF'
Preparing Veggie Pizza
Baking Veggie Pizza
Cutting Veggie Pizza
Boxing Veggie Pizza
We ordered a Veggie Pizza
---- Veggie Pizza ----
Crust
Marinara sauce
Shredded mozzarella
Grated parmesan
Diced onion
Sliced mushrooms
Sliced red pepper
Sliced black olives


EOF;

        return [
            ['cheese', $cheeseOutputString],
            ['pepperoni', $pepperoniOutputString],
            ['clam', $clamOutputString],
            ['veggie', $veggieOutputString],
        ];
    }
}
