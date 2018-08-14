<?php

namespace Ikicode\DesignPatterns\Creational\Constructor;

use Ikicode\DesignPatterns\Creational\Constructor\Parts\Car;
use Ikicode\DesignPatterns\Creational\Constructor\Parts\Door;
use Ikicode\DesignPatterns\Creational\Constructor\Parts\Engine;
use Ikicode\DesignPatterns\Creational\Constructor\Parts\Vehicle;
use Ikicode\DesignPatterns\Creational\Constructor\Parts\Wheel;

class CarBuilder implements VehicleBuilderInterface
{
    /**
     * @var Car
     */
    private $car;

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
