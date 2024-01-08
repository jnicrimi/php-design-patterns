<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\FactoryMethod;

class ChicagoStylePepperoniPizza extends AbstractPizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Pepperoni Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';
        $this->toppings[] = 'Shredded Mozzarella Cheese';
        $this->toppings[] = 'Black Olives';
        $this->toppings[] = 'Spinach';
        $this->toppings[] = 'Eggplant';
        $this->toppings[] = 'Sliced Pepperoni';
    }

    /**
     * @return void
     */
    public function cut(): void
    {
        echo 'Cutting the pizza into square slices';
    }
}
