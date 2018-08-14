<?php

namespace Ikicode\DesignPatterns\Creational\Constructor;

use Ikicode\DesignPatterns\Creational\Constructor\Parts\Door;
use Ikicode\DesignPatterns\Creational\Constructor\Parts\Engine;
use Ikicode\DesignPatterns\Creational\Constructor\Parts\Truck;
use Ikicode\DesignPatterns\Creational\Constructor\Parts\Vehicle;
use Ikicode\DesignPatterns\Creational\Constructor\Parts\Wheel;

class TruckBuilder implements VehicleBuilderInterface
{
    /**
     * @var Truck
     */
    private $truck;

    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
