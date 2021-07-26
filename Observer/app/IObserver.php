<?php


namespace App;


interface IObserver
{
    public function update(Observerable $observerable);
}