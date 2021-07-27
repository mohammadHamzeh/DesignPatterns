<?php

namespace App\Car\Cars;


use App\Car\Contracts\Car;

class Pride implements Car
{

    public function cost(): int
    {
        return 4000;
    }

    public function description(): string
    {
        return "pride";
    }

    public function car_name(): string
    {
        return 'pride';
    }
}