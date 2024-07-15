<?php

declare (strict_types=1);

namespace HeadFirstDesignPatterns\Factory\AbstractFactory;

class ClamPizza extends AbstractPizza
{
    public function __construct(protected PizzaIngredientFactoryInterface $ingredientFactory)
    {
    }

    public function prepare(): void
    {
        echo 'Preparing '.$this->name.PHP_EOL;
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clam = $this->ingredientFactory->createClam();
    }
}
