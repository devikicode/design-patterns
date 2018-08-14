<?php

namespace Ikicode\DesignPatterns\Creational\Constructor;

use Ikicode\DesignPatterns\Creational\Constructor\Parts\Vehicle;

class VehicleBuild
{
    public function build(VehicleBuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}