<?php

namespace Ikicode\DesignPatterns\Structural\Bridge;

interface FormatterInterface
{
    public function format(string $text);
}