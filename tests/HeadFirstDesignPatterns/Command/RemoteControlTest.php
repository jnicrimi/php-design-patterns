<?php

declare(strict_types=1);

namespace Tests\HeadFirstDesignPatterns\Command;

use HeadFirstDesignPatterns\Command\GarageDoor;
use HeadFirstDesignPatterns\Command\GarageDoorOpenCommand;
use HeadFirstDesignPatterns\Command\Light;
use HeadFirstDesignPatterns\Command\LightOnCommand;
use HeadFirstDesignPatterns\Command\RemoteControl;
use PHPUnit\Framework\TestCase;

class RemoteControlTest extends TestCase
{
    /**
     * @return void
     */
    public function testRemoteControl(): void
    {
        $remoteControl = new RemoteControl();
        $light = new Light();
        $garageDoor = new GarageDoor();
        $lightOnCommand = new LightOnCommand($light);
        $garageDoorOpenCommand = new GarageDoorOpenCommand($garageDoor);
        $remoteControl->setCommand($lightOnCommand);
        $remoteControl->buttonWasPressed();
        $remoteControl->setCommand($garageDoorOpenCommand);
        $remoteControl->buttonWasPressed();
        $expected = 'Light is on'.PHP_EOL.'Garage door is open'.PHP_EOL;
        $this->expectOutputString($expected);
    }
}
