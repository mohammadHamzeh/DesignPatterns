<?php

namespace App;


interface IObservable
{
    public function register(IObserver $IObserver);

    public function unregister(IObserver $IObserver);

    public function notify();
}   