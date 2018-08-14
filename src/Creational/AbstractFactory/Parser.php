<?php

namespace Ikicode\DesignPatterns\Creational\AbstractFactory;

interface Parser
{
    public function parse(string $input): array;
}