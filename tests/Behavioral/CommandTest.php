<?php

namespace Ikicode\DesignPatternsTest\Behavioral;

use Ikicode\DesignPatterns\Behavioral\Command\HelloCommand;
use Ikicode\DesignPatterns\Behavioral\Command\Invoker;
use Ikicode\DesignPatterns\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertEquals('Hello World', $receiver->getOutput());
    }
}
