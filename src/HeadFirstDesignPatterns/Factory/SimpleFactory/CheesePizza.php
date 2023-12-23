<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\SimpleFactory;

class CheesePizza extends AbstractPizza
{
    public function __construct()
    {
        $this->name = 'Cheese Pizza';
        $this->dough = 'Regular Crust';
        $this->sauce = 'Marinara Pizza Sauce';
        array_push($this->toppings, 'Fresh Mozzarella');
        array_push($this->toppings, 'Parmesan');
    }
}
