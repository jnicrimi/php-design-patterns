<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

abstract class AbstractPizzaStore
{
    abstract protected function createPizza(string $type): ?AbstractPizza;

    public function orderPizza(string $type): ?AbstractPizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
