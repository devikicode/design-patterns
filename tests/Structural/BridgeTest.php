<?php

namespace Ikicode\DesignPatternsTest\Structural;

use Ikicode\DesignPatterns\Structural\Bridge\HelloWorldService;
use Ikicode\DesignPatterns\Structural\Bridge\HtmlFormatter;
use Ikicode\DesignPatterns\Structural\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextPrinter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());
        $this->assertEquals('Hello World', $service->get());

        // now change the implementation and use the HtmlFormatter instead
        $service->setImplementation(new HtmlFormatter());
        $this->assertEquals('<p>Hello World</p>', $service->get());
    }
}
