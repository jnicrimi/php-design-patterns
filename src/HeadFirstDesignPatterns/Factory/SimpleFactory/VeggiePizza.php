<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\SimpleFactory;

class VeggiePizza extends AbstractPizza
{
    public function __construct()
    {
        $this->name = 'Veggie Pizza';
        $this->dough = 'Crust';
        $this->sauce = 'Marinara sauce';
        array_push($this->toppings, 'Shredded mozzarella');
        array_push($this->toppings, 'Grated parmesan');
        array_push($this->toppings, 'Diced onion');
        array_push($this->toppings, 'Sliced mushrooms');
        array_push($this->toppings, 'Sliced red pepper');
        array_push($this->toppings, 'Sliced black olives');
    }
}
