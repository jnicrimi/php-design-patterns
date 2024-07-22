<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\FactoryMethod;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza(string $type): ?Pizza
    {
        switch ($type) {
            case 'cheese':
                return new ChicagoStyleCheesePizza();
            case 'veggie':
                return new ChicagoStyleVeggiePizza();
            case 'clam':
                return new ChicagoStyleClamPizza();
            case 'pepperoni':
                return new ChicagoStylePepperoniPizza();
            default:
                return null;
        }
    }
}
