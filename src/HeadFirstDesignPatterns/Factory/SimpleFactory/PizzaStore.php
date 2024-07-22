<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\SimpleFactory;

class PizzaStore
{
    public function __construct(private SimplePizzaFactory $factory)
    {
    }

    public function orderPizza(string $type): ?Pizza
    {
        $pizza = $this->factory->createPizza($type);
        if ($pizza === null) {
            return null;
        }
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
