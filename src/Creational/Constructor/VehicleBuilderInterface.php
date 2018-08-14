<?php

namespace Ikicode\DesignPatterns\Creational\Constructor;

use Ikicode\DesignPatterns\Creational\Constructor\Parts\Vehicle;

interface VehicleBuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}
