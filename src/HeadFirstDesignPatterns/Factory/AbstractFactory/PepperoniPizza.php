<?php

declare (strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class PepperoniPizza extends AbstractPizza
{
    /**
     * @param PizzaIngredientFactoryInterface $ingredientFactory
     */
    public function __construct(protected PizzaIngredientFactoryInterface $ingredientFactory)
    {
    }

    /**
     * @return void
     */
    public function prepare(): void
    {
        echo 'Preparing '.$this->name.PHP_EOL;
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->veggies = $this->ingredientFactory->createVeggies();
        $this->pepperoni = $this->ingredientFactory->createPepperoni();
    }
}
