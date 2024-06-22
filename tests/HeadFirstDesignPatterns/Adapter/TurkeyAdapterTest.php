<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Adapter;

use HeadFirstDesignPatterns\Adapter\MallardDuck;
use HeadFirstDesignPatterns\Adapter\TurkeyAdapter;
use HeadFirstDesignPatterns\Adapter\WildTurkey;
use PHPUnit\Framework\TestCase;

class TurkeyAdapterTest extends TestCase
{
    /**
     * @return void
     */
    public function testTurkeyToDuck(): void
    {
        $duck = new MallardDuck();
        $turkey = new WildTurkey();
        $turkeyAdapter = new TurkeyAdapter($turkey);

        $quackExpected = 'Gobble gobble'.PHP_EOL;
        $flyExpected = 'I\'m flying a short distance'.PHP_EOL;
        $expected = $quackExpected.str_repeat($flyExpected, 5);
        $this->expectOutputString($expected);
        $turkeyAdapter->quack();
        $turkeyAdapter->fly();
    }
}
