<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class NYPizzaStore extends AbstractPizzaStore
{
    /**
     * @param string $type
     *
     * @return AbstractPizza|null
     */
    protected function createPizza(string $type): ?AbstractPizza
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
