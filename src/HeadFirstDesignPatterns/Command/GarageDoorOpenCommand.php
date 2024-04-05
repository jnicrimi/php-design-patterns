<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Command;

class GarageDoorOpenCommand implements CommandInterface
{
    /**
     * @var GarageDoor
     */
    private GarageDoor $garageDoor;

    /**
     * @param GarageDoor $garageDoor
     */
    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    /**
     * @return void
     */
    public function execute(): void
    {
        $this->garageDoor->up();
    }
}
