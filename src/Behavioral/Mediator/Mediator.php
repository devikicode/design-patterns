<?php

namespace Ikicode\DesignPatterns\Behavioral\Mediator;

/**
 * Mediator is the concrete Mediator for this design pattern
 *
 * In this example, I have made a "Hello World" with the Mediator Pattern
 */
class Mediator implements MediatorInterface
{
    /**
     * @var Server
     */
    private $server;

    /**
     * @var Database
     */
    private $database;

    /**
     * @var Client
     */
    private $client;

    /**
     * @param Database $database
     * @param Client $client
     * @param Server $server
     */
    public function __construct(Database $database, Client $client, Server $server)
    {
        $this->database = $database;
        $this->server = $server;
        $this->client = $client;

        $this->database->setMediator($this);
        $this->server->setMediator($this);
        $this->client->setMediator($this);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb(): string
    {
        return $this->database->getData();
    }

    /**
     * @param string $content
     */
    public function sendResponse($content)
    {
        $this->client->output($content);
    }
}