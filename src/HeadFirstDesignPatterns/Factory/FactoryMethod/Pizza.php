<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\FactoryMethod;

abstract class Pizza
{
    protected string $name;

    protected string $dough;

    protected string $sauce;

    protected array $toppings = [];

    public function getName(): string
    {
        return $this->name;
    }

    public function prepare(): void
    {
        echo 'Prepare '.$this->name.PHP_EOL;
        echo 'Tossing dough...'.PHP_EOL;
        echo 'Adding sauce...'.PHP_EOL;
        echo 'Adding toppings: '.PHP_EOL;
        foreach ($this->toppings as $topping) {
            echo '   '.$topping.PHP_EOL;
        }
    }

    public function bake(): void
    {
        echo 'Bake for 25 minutes at 350';
    }

    public function cut(): void
    {
        echo 'Cut the pizza into diagonal slices';
    }

    public function box(): void
    {
        echo 'Place pizza in official PizzaStore box';
    }

    public function __toString(): string
    {
        $display = '';
        $display .= '---- '.$this->name.' ----'.PHP_EOL;
        $display .= $this->dough.PHP_EOL;
        $display .= $this->sauce.PHP_EOL;
        foreach ($this->toppings as $topping) {
            $display .= $topping.PHP_EOL;
        }

        return $display;
    }
}
