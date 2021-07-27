<?php


namespace App\Car\Cars;


use App\Car\Contracts\Car;

class Benz implements Car
{

    public function cost(): int
    {
        return 100000;
    }

    public function description(): string
    {
       return 'Benz';
    }

    public function car_name(): string
    {
       return 'Benz cls2500';
    }
}