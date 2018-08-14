<?php
namespace Ikicode\DesignPatternsTest\Creational;

use Ikicode\DesignPatterns\Creational\FactoryMethod\FileLogger;
use Ikicode\DesignPatterns\Creational\FactoryMethod\FileLoggerFactory;
use Ikicode\DesignPatterns\Creational\FactoryMethod\StdoutLogger;
use Ikicode\DesignPatterns\Creational\FactoryMethod\StdoutLoggerFactory;
use Ikicode\DesignPatterns\Creational\StaticFactory\FormatNumber;
use Ikicode\DesignPatterns\Creational\StaticFactory\FormatString;
use Ikicode\DesignPatterns\Creational\StaticFactory\FormatterStaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(
            FormatNumber::class,
            FormatterStaticFactory::factory('number')
        );
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
            FormatString::class,
            FormatterStaticFactory::factory('string')
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        FormatterStaticFactory::factory('object');
    }
}
