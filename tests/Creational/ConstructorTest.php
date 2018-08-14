<?php

namespace Ikicode\DesignPatterns\Creational\Constructor;

use Ikicode\DesignPatterns\Creational\Constructor\Parts\Car;
use Ikicode\DesignPatterns\Creational\Constructor\Parts\Truck;
use PHPUnit\Framework\TestCase;

class ConstructorTest extends TestCase
{

    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new VehicleBuild())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new VehicleBuild())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}
