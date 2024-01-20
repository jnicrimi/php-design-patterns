<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

use ArrayObject;

class NYPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{
    /**
     * @return DoughInterface
     */
    public function createDough(): DoughInterface
    {
        return new ThinCrustDough();
    }

    /**
     * @return SauceInterface
     */
    public function createSauce(): SauceInterface
    {
        return new MarinaraSauce();
    }

    /**
     * @return CheeseInterface
     */
    public function createCheese(): CheeseInterface
    {
        return new ReggianoCheese();
    }

    /**
     * @return ArrayObject<VeggiesInterface>
     */
    public function createVeggies(): ArrayObject
    {
        $veggies = new ArrayObject();
        $veggies->append(new Garlic());
        $veggies->append(new Onion());
        $veggies->append(new Mushroom());
        $veggies->append(new RedPepper());

        return $veggies;
    }

    /**
     * @return PepperoniInterface
     */
    public function createPepperoni(): PepperoniInterface
    {
        return new SlicedPepperoni();
    }

    /**
     * @return ClamsInterface
     */
    public function createClam(): ClamsInterface
    {
        return new FreshClams();
    }
}
