<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Strategy;

use HeadFirstDesignPatterns\Strategy\MallardDuck;
use PHPUnit\Framework\TestCase;

class MallardDuckTest extends TestCase
{
    /**
     * @return void
     */
    public function testFly()
    {
        $duck = new MallardDuck();
        $this->assertSame('I\'m flying!!', $duck->fly());
    }

    /**
     * @return void
     */
    public function testQuack()
    {
        $duck = new MallardDuck();
        $this->assertSame('Quack', $duck->quack());
    }

    /**
     * @return void
     */
    public function testDisplay()
    {
        $duck = new MallardDuck();
        $this->assertSame('I\'m a real Mallard duck', $duck->display());
    }
}
