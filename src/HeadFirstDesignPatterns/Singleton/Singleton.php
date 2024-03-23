<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Singleton;

class Singleton
{
    /**
     * @var Singleton
     */
    private static Singleton $instance;

    /**
     * @var string
     */
    private string $id;

    private function __construct()
    {
        $this->id = uniqid();
    }

    /**
     * @return Singleton
     */
    public static function getInstance(): self
    {
        if (! isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}
