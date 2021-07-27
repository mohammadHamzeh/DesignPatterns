<?php


namespace App\Car\Decorator;


class SunRoof extends CarFeature
{

    public function cost(): int
    {
        return $this->car->cost()+2000;
    }

    public function description(): string
    {
        return $this->car->description().", SunRoof";
    }
}