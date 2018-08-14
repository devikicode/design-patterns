<?php

namespace Ikicode\DesignPatternsTest\Structural;


use Ikicode\DesignPatterns\Structural\Decorator\DoubleRoomBooking;
use Ikicode\DesignPatterns\Structural\Decorator\ExtraBed;
use Ikicode\DesignPatterns\Structural\Decorator\Wifi;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceForBasicDoubleRoomBooking()
    {
        $booking = new DoubleRoomBooking();

        $this->assertEquals(40, $booking->calculatePrice());
        $this->assertEquals('double room', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);

        $this->assertEquals(42, $booking->calculatePrice());
        $this->assertEquals('double room with wifi', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFiAndExtraBed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        $booking = new ExtraBed($booking);

        $this->assertEquals(72, $booking->calculatePrice());
        $this->assertEquals('double room with wifi with extra bed', $booking->getDescription());
    }
}
