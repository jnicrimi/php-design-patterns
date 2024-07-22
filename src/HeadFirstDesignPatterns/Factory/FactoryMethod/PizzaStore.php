<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\FactoryMethod;

abstract class PizzaStore
{
    abstract public function createPizza(string $type): ?Pizza;

    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        echo '--- Making a '.$pizza->getName().' ---'.PHP_EOL;
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
