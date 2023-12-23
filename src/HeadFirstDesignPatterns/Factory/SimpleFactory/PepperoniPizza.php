<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\SimpleFactory;

class PepperoniPizza extends AbstractPizza
{
    public function __construct()
    {
        $this->name = 'Pepperoni Pizza';
        $this->dough = 'Crust';
        $this->sauce = 'Marinara sauce';
        array_push($this->toppings, 'Sliced Pepperoni');
        array_push($this->toppings, 'Sliced Onion');
        array_push($this->toppings, 'Grated parmesan cheese');
    }
}
