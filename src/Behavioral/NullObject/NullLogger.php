<?php

namespace Ikicode\DesignPatterns\Behavioral\NullObject;

class NullLogger implements LoggerInterface
{
    public function log(string $str)
    {
        // do nothing
    }
}
