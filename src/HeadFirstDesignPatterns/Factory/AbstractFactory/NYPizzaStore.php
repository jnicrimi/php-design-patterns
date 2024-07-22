<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): ?Pizza
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory();
        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName('New York Style Cheese Pizza');

                break;
            case 'veggie':
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName('New York Style Veggie Pizza');

                break;
            case 'clam':
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName('New York Style Clam Pizza');

                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza($ingredientFactory);
                $pizza->setName('New York Style Pepperoni Pizza');

                break;
        }

        return $pizza;
    }
}
