<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Strategy;

use HeadFirstDesignPatterns\Strategy\MallardDuck;
use PHPUnit\Framework\TestCase;

class MallardDuckTest extends TestCase
{
    /**
     * @testdox MallardDuck display
     *
     * @return void
     */
    public function testDisplay()
    {
        $duck = new MallardDuck();
        $this->assertSame('I\'m a real Mallard duck', $duck->display());
    }
}
