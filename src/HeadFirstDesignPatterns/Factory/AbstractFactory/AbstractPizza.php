<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

use ArrayObject;

abstract class AbstractPizza
{
    protected string $name;

    protected DoughInterface $dough;

    protected SauceInterface $sauce;

    /**
     * @var ArrayObject<VeggiesInterface>
     */
    protected ArrayObject $veggies;

    protected CheeseInterface $cheese;

    protected PepperoniInterface $pepperoni;

    protected ClamsInterface $clam;

    abstract public function prepare(): void;

    public function bake(): void
    {
        echo 'Bake for 25 minutes at 350'.PHP_EOL;
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into diagonal slices'.PHP_EOL;
    }

    public function box(): void
    {
        echo 'Place pizza in official PizzaStore box'.PHP_EOL;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString(): string
    {
        $result = '';
        $result .= '---- '.$this->name.' ----'.PHP_EOL;
        if ($this->dough !== null) {
            $result .= $this->dough.PHP_EOL;
        }
        if ($this->sauce !== null) {
            $result .= $this->sauce.PHP_EOL;
        }
        if ($this->cheese !== null) {
            $result .= $this->cheese.PHP_EOL;
        }
        if ($this->veggies !== null) {
            $veggies = [];
            foreach ($this->veggies as $veggie) {
                $veggies[] = (string) $veggie;
            }
            $result .= implode(', ', $veggies).PHP_EOL;
        }
        if ($this->clam !== null) {
            $result .= $this->clam.PHP_EOL;
        }
        if ($this->pepperoni !== null) {
            $result .= $this->pepperoni.PHP_EOL;
        }

        return $result;
    }
}
