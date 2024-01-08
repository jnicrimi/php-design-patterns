<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\FactoryMethod;

class NYStyleClamPizza extends AbstractPizza
{
    public function __construct()
    {
        $this->name = 'NY Style Clam Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
        $this->toppings[] = 'Grated Reggiano Cheese';
        $this->toppings[] = 'Fresh Clams from Long Island Sound';
    }
}
