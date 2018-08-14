<?php

namespace Ikicode\DesignPatternsTest\Creational;

use Ikicode\DesignPatterns\Creational\SimpleFactory\Bicycle;
use Ikicode\DesignPatterns\Creational\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}
