<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\SimpleFactory;

class PizzaStore
{
    /**
     * @param SimplePizzaFactory $factory
     */
    public function __construct(private SimplePizzaFactory $factory)
    {
    }

    /**
     * @param string $type
     *
     * @return AbstractPizza|null
     */
    public function orderPizza(string $type): ?AbstractPizza
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
