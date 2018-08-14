<?php

namespace Ikicode\DesignPatternsTest\Behavioral;

use Ikicode\DesignPatterns\Behavioral\NullObject\NullLogger;
use Ikicode\DesignPatterns\Behavioral\NullObject\PrintLogger;
use Ikicode\DesignPatterns\Behavioral\NullObject\Service;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in '. Service::class .'::doSomething');
        $service->doSomething();
    }
}