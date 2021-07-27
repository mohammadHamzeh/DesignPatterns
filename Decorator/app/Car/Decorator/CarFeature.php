<?php

namespace App\Car\Decorator;

use App\Car\Contracts\Car;

abstract class CarFeature implements Car
{
    protected Car $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    abstract public function cost(): int;

    abstract public function description(): string;

    public function car_name(): string
    {
        return $this->car->car_name();
    }

}