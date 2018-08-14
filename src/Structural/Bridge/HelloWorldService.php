<?php

namespace Ikicode\DesignPatterns\Structural\Bridge;

class HelloWorldService extends PrintService
{
    public function get()
    {
        return $this->implementation->format('Hello World');
    }
}