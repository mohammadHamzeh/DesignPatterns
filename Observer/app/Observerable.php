<?php


namespace App;


interface Observerable
{
    public function register(IObserver $observerable);

    public function unregister(IObserver $observerable);

    public function notify();
}