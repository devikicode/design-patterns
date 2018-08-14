<?php

namespace Ikicode\DesignPatternsTest\Creational;

use Ikicode\DesignPatterns\Creational\AbstractFactory\CsvParser;
use Ikicode\DesignPatterns\Creational\AbstractFactory\JsonParser;
use Ikicode\DesignPatterns\Creational\AbstractFactory\ParserFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateCsvParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createCsvParser(true);

        $this->assertInstanceOf(CsvParser::class, $parser);
    }

    public function testCanCreateJsonParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createJsonParser();

        $this->assertInstanceOf(JsonParser::class, $parser);
    }
}
