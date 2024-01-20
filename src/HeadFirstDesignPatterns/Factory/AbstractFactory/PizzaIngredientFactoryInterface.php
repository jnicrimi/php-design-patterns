<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

use ArrayObject;

interface PizzaIngredientFactoryInterface
{
    /**
     * @return DoughInterface
     */
    public function createDough(): DoughInterface;

    /**
     * @return SauceInterface
     */
    public function createSauce(): SauceInterface;

    /**
     * @return CheeseInterface
     */
    public function createCheese(): CheeseInterface;

    /**
     * @return ArrayObject<VeggiesInterface>
     */
    public function createVeggies(): ArrayObject;

    /**
     * @return PepperoniInterface
     */
    public function createPepperoni(): PepperoniInterface;

    /**
     * @return ClamsInterface
     */
    public function createClam(): ClamsInterface;
}
