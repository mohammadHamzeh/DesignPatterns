<?php


namespace App\Car\Decorator;


class ZevarDar extends CarFeature
{

    public function cost(): int
    {
        return $this->car->cost() + 300;
    }

    public function description(): string
    {
        return $this->car->description() . ", ZevarDar";
    }

    public function car_name(): string
    {
        return $this->car->car_name();
    }
}