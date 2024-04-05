<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Command;

class RemoteControl
{
    /**
     * @var CommandInterface
     */
    private CommandInterface $slot;

    /**
     * @param CommandInterface $command
     *
     * @return void
     */
    public function setCommand(CommandInterface $command): void
    {
        $this->slot = $command;
    }

    /**
     * @return void
     */
    public function buttonWasPressed(): void
    {
        $this->slot->execute();
    }
}
