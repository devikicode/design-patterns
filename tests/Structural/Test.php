<?php

namespace Ikicode\DesignPatternsTest\Structural;

use DataMapperTest;
use Ikicode\DesignPatterns\Structural\DataMapper\StorageAdapter;
use Ikicode\DesignPatterns\Structural\DataMapper\User;
use Ikicode\DesignPatterns\Structural\DataMapper\UserMapper;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter([1 => ['username' => 'domnikl', 'email' => 'liebler.dominik@gmail.com']]);
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);

        $this->assertInstanceOf(User::class, $user);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWillNotMapInvalidData()
    {
        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}
