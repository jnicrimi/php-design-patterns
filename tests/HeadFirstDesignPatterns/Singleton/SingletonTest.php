<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Singleton;

use HeadFirstDesignPatterns\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    /**
     * @return void
     */
    public function testUniqueInstance(): void
    {
        $instance1 = Singleton::getInstance();
        $instance2 = Singleton::getInstance();

        $this->assertSame($instance1, $instance2);
    }

    /**
     * @return void
     */
    public function testId(): void
    {
        $instance1 = Singleton::getInstance();
        $instance2 = Singleton::getInstance();

        $this->assertSame($instance1->getId(), $instance2->getId());
    }
}
