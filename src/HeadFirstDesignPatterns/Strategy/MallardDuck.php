<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Strategy;

class MallardDuck extends AbstractDuck
{
    /**
     * @return string
     */
    public function display(): string
    {
        return 'I\'m a real Mallard duck';
    }
}
