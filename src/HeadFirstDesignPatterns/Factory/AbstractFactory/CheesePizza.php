<?php

declare (strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class CheesePizza extends AbstractPizza
{
    /**
     * @var PizzaIngredientFactoryInterface
     */
    protected $ingredientFactory;

    /**
     * @param PizzaIngredientFactoryInterface $ingredientFactory
     */
    public function __construct(PizzaIngredientFactoryInterface $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
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
    }
}
