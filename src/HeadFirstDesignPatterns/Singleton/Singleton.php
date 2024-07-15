<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Singleton;

class Singleton
{
    private static ?Singleton $instance = null;

    private string $id;

    private function __construct()
    {
        $this->id = uniqid();
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
