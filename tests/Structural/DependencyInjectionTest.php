<?php

namespace Ikicode\DesignPatternsTest\Structural;

use Ikicode\DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;
use Ikicode\DesignPatterns\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'domnikl', '1234');
        $connection = new DatabaseConnection($config);

        $this->assertEquals('domnikl:1234@localhost:3306', $connection->getDsn());
    }
}
