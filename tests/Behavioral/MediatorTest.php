<?php

namespace Ikicode\DesignPatternsTest\Behavioral;

use Ikicode\DesignPatterns\Behavioral\Mediator\Client;
use Ikicode\DesignPatterns\Behavioral\Mediator\Database;
use Ikicode\DesignPatterns\Behavioral\Mediator\Mediator;
use Ikicode\DesignPatterns\Behavioral\Mediator\Server;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputHelloWorld()
    {
        $client = new Client();
        new Mediator(new Database(), $client, new Server());

        $this->expectOutputString('Hello World');
        $client->request();
    }
}
