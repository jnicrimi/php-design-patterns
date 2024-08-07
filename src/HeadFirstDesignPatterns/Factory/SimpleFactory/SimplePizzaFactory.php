<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\SimpleFactory;

class SimplePizzaFactory
{
    public function createPizza(string $type): ?Pizza
    {
        $pizza = null;
        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza();

                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza();

                break;
            case 'clam':
                $pizza = new ClamPizza();

                break;
            case 'veggie':
                $pizza = new VeggiePizza();

                break;
        }

        return $pizza;
    }
}
