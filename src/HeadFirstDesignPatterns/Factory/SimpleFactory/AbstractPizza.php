<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\SimpleFactory;

use Stringable;

abstract class AbstractPizza implements Stringable
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
        echo 'Preparing '.$this->name.PHP_EOL;
    }

    /**
     * @return void
     */
    public function bake(): void
    {
        echo 'Baking '.$this->name.PHP_EOL;
    }

    /**
     * @return void
     */
    public function cut(): void
    {
        echo 'Cutting '.$this->name.PHP_EOL;
    }

    /**
     * @return void
     */
    public function box(): void
    {
        echo 'Boxing '.$this->name.PHP_EOL;
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
