<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

use ArrayObject;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{
    /**
     * @return DoughInterface
     */
    public function createDough(): DoughInterface
    {
        return new ThickCrustDough();
    }

    /**
     * @return SauceInterface
     */
    public function createSauce(): SauceInterface
    {
        return new PlumTomatoSauce();
    }

    /**
     * @return CheeseInterface
     */
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
        return new FrozenClams();
    }
}
