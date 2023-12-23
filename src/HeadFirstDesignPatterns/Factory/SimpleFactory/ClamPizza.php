<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\SimpleFactory;

class ClamPizza extends AbstractPizza
{
    public function __construct()
    {
        $this->name = 'Clam Pizza';
        $this->dough = 'Thin crust';
        $this->sauce = 'White garlic sauce';
        array_push($this->toppings, 'Clams');
        array_push($this->toppings, 'Grated parmesan cheese');
    }
}
