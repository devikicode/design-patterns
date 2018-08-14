<?php
namespace Ikicode\DesignPatternsTest\Creational;

use Ikicode\DesignPatterns\Creational\FactoryMethod\FileLogger;
use Ikicode\DesignPatterns\Creational\FactoryMethod\FileLoggerFactory;
use Ikicode\DesignPatterns\Creational\FactoryMethod\StdoutLogger;
use Ikicode\DesignPatterns\Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethod extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}
