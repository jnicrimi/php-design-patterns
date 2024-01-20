<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

abstract class AbstractPizzaStore
{
    /**
     * @param string $type
     *
     * @return AbstractPizza|null
     */
    abstract protected function createPizza(string $type): ?AbstractPizza;

    /**
     * @param string $type
     *
     * @return AbstractPizza|null
     */
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
