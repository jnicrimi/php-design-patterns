<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\FactoryMethod;

class NYPizzaStore extends AbstractPizzaStore
{
    public function createPizza(string $type): ?AbstractPizza
    {
        switch ($type) {
            case 'cheese':
                return new NYStyleCheesePizza();
            case 'veggie':
                return new NYStyleVeggiePizza();
            case 'clam':
                return new NYStyleClamPizza();
            case 'pepperoni':
                return new NYStylePepperoniPizza();
            default:
                return null;
        }
    }
}
