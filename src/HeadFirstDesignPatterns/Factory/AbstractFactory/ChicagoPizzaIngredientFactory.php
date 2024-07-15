<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

use ArrayObject;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{
    public function createDough(): DoughInterface
    {
        return new ThickCrustDough();
    }

    public function createSauce(): SauceInterface
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): CheeseInterface
    {
        return new MozzarellaCheese();
    }

    /**
     * @return ArrayObject<VeggiesInterface>
     */
    public function createVeggies(): ArrayObject
    {
        $veggies = new ArrayObject();
        $veggies->append(new BlackOlives());
        $veggies->append(new Spinach());
        $veggies->append(new Eggplant());

        return $veggies;
    }

    public function createPepperoni(): PepperoniInterface
    {
        return new SlicedPepperoni();
    }

    public function createClam(): ClamsInterface
    {
        return new FrozenClams();
    }
}
