<?php
namespace Ikicode\DesignPatternsTest\Creational;

use Ikicode\DesignPatterns\Creational\Singleton\Connection;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{

    public function testGetInstanceIsNotNull()
    {
        $this->assertNotNull(Connection::getInstance());
    }

    public function testIsSameInstanceBetweenCalls()
    {
        $this->assertSame(Connection::getInstance(), Connection::getInstance());
    }
}
