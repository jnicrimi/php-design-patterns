<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class ChicagoPizzaStore extends AbstractPizzaStore
{
    /**
     * @param string $type
     *
     * @return AbstractPizza|null
     */
    protected function createPizza(string $type): ?AbstractPizza
    {
        $pizza = null;
        $ingredientFactory = new ChicagoPizzaIngredientFactory();
        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName('Chicago Style Cheese Pizza');

                break;
            case 'veggie':
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName('Chicago Style Veggie Pizza');

                break;
            case 'clam':
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName('Chicago Style Clam Pizza');

                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza($ingredientFactory);
                $pizza->setName('Chicago Style Pepperoni Pizza');

                break;
        }

        return $pizza;
    }
}
