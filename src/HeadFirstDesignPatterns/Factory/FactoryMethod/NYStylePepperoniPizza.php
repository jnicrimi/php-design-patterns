<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\FactoryMethod;

class NYStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Pepperoni Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
        $this->toppings[] = 'Grated Reggiano Cheese';
        $this->toppings[] = 'Sliced Pepperoni';
        $this->toppings[] = 'Garlic';
        $this->toppings[] = 'Onion';
        $this->toppings[] = 'Mushrooms';
        $this->toppings[] = 'Red Pepper';
    }
}
