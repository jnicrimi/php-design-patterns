<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

use ArrayObject;

abstract class AbstractPizza
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var DoughInterface
     */
    protected DoughInterface $dough;

    /**
     * @var SauceInterface
     */
    protected SauceInterface $sauce;

    /**
     * @var ArrayObject<VeggiesInterface>
     */
    protected ArrayObject $veggies;

    /**
     * @var CheeseInterface
     */
    protected CheeseInterface $cheese;

    /**
     * @var PepperoniInterface
     */
    protected PepperoniInterface $pepperoni;

    /**
     * @var ClamsInterface
     */
    protected ClamsInterface $clam;

    /**
     * @return void
     */
    abstract public function prepare(): void;

    /**
     * @return void
     */
    public function bake(): void
    {
        echo 'Bake for 25 minutes at 350'.PHP_EOL;
    }

    /**
     * @return void
     */
    public function cut(): void
    {
        echo 'Cutting the pizza into diagonal slices'.PHP_EOL;
    }

    /**
     * @return void
     */
    public function box(): void
    {
        echo 'Place pizza in official PizzaStore box'.PHP_EOL;
    }

    /**
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
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
