<?php

namespace App;

class Service implements IObserver
{
    protected $name;

    /**
     * Service constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    public function update(Observerable $observerable)
    {
        echo "Service: $this->name  {$observerable->getEvent()}" .PHP_EOL;
    }
}