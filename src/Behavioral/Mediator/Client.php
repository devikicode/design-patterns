<?php

namespace Ikicode\DesignPatterns\Behavioral\Mediator;

/**
 * Client is a client that makes requests and gets the response.
 */
class Client extends Colleague
{
    public function request()
    {
        $this->mediator->makeRequest();
    }

    public function output(string $content)
    {
        echo $content;
    }
}