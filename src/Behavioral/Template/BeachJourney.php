<?php

namespace Ikicode\DesignPatterns\Behavioral\Template;

class BeachJourney extends Journey
{
    protected function enjoyVacation(): string
    {
        return "Swimming and sun-bathing";
    }
}