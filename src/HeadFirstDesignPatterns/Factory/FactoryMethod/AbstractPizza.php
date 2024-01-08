<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\FactoryMethod;

abstract class AbstractPizza
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $dough;

    /**
     * @var string
     */
    protected $sauce;

    /**
     * @var array
     */
    protected $toppings = [];

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return void
     */
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

    /**
     * @return void
     */
    public function bake(): void
    {
        echo 'Bake for 25 minutes at 350';
    }

    /**
     * @return void
     */
    public function cut(): void
    {
        echo 'Cut the pizza into diagonal slices';
    }

    /**
     * @return void
     */
    public function box(): void
    {
        echo 'Place pizza in official PizzaStore box';
    }

    /**
     * @return string
     */
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
