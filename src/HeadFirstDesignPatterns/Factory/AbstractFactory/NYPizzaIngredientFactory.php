<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

use ArrayObject;

class NYPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{
    public function createDough(): DoughInterface
    {
        return new ThinCrustDough();
    }

    public function createSauce(): SauceInterface
    {
        return new MarinaraSauce();
    }

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

    public function createPepperoni(): PepperoniInterface
    {
        return new SlicedPepperoni();
    }

    public function createClam(): ClamsInterface
    {
        return new FreshClams();
    }
}
