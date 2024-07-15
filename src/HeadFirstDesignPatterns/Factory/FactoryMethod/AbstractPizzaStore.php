<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\FactoryMethod;

abstract class AbstractPizzaStore
{
    abstract public function createPizza(string $type): ?AbstractPizza;

    public function orderPizza(string $type): AbstractPizza
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
