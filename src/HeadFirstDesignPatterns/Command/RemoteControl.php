<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Command;

class RemoteControl
{
    private CommandInterface $slot;

    public function setCommand(CommandInterface $command): void
    {
        $this->slot = $command;
    }

    public function buttonWasPressed(): void
    {
        $this->slot->execute();
    }
}
