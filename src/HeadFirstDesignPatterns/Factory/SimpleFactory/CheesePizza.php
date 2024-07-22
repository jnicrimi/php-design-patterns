<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\SimpleFactory;

class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Cheese Pizza';
        $this->dough = 'Regular Crust';
        $this->sauce = 'Marinara Pizza Sauce';
        $this->toppings[] = 'Fresh Mozzarella';
        $this->toppings[] = 'Parmesan';
    }
}
