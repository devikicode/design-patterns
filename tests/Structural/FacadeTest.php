<?php

namespace Ikicode\DesignPatternsTest\Structural;

use Ikicode\DesignPatterns\Structural\Facade\BiosInterface;
use Ikicode\DesignPatterns\Structural\Facade\Facade;
use Ikicode\DesignPatterns\Structural\Facade\OsInterface;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        /** @var OsInterface|\PHPUnit_Framework_MockObject_MockObject $os */
        $os = $this->createMock(OsInterface::class);

        $os->method('getName')
            ->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder(BiosInterface::class)
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();

        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        $facade = new Facade($bios, $os);

        // the facade interface is simple
        $facade->turnOn();

        // but you can also access the underlying components
        $this->assertEquals('Linux', $os->getName());
    }
}
