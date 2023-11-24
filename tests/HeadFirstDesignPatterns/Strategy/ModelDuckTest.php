<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Strategy;

use HeadFirstDesignPatterns\Strategy\ModelDuck;
use PHPUnit\Framework\TestCase;

class ModelDuckTest extends TestCase
{
    /**
     * @testdox ModelDuck fly
     *
     * @return void
     */
    public function testFly()
    {
        $duck = new ModelDuck();
        $this->assertSame('I can\'t fly', $duck->fly());
    }

    /**
     * @testdox ModelDuck quack
     *
     * @return void
     */
    public function testQuack()
    {
        $duck = new ModelDuck();
        $this->assertSame('<< Silence >>', $duck->quack());
    }

    /**
     * @testdox ModelDuck display
     *
     * @return void
     */
    public function testDisplay()
    {
        $duck = new ModelDuck();
        $this->assertSame('I\'m a model duck', $duck->display());
    }
}
