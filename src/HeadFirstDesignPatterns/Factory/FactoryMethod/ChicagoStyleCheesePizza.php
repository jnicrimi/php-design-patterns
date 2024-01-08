<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\FactoryMethod;

class ChicagoStyleCheesePizza extends AbstractPizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Cheese Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';
        $this->toppings[] = 'Shredded Mozzarella Cheese';
    }

    /**
     * @return void
     */
    public function cut(): void
    {
        echo 'Cutting the pizza into square slices';
    }
}
