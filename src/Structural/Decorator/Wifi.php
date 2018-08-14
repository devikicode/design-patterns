<?php

namespace Ikicode\DesignPatterns\Structural\Decorator;

class Wifi extends BookingDecorator
{
    const PRICE = 2;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with wifi';
    }
}