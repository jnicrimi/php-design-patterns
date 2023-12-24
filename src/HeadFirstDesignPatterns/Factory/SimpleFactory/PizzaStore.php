<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\SimpleFactory;

class PizzaStore
{
    /**
     * @var SimplePizzaFactory
     */
    private $factory;

    /**
     * @param SimplePizzaFactory $factory
     */
    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
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
