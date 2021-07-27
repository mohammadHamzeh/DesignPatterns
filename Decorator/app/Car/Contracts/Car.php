<?php

namespace App\Car\Contracts;

interface Car
{
    public function cost(): int;

    public function description(): string;

    public function car_name():string;
}