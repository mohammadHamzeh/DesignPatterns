<?php

namespace App;


class Service implements IObserver
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function update(IObservable $IObservable)
    {
        echo "name : $this->name  | ".$IObservable->getEvent() .PHP_EOL;
    }
}