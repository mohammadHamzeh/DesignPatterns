<?php


namespace App;


class Publisher implements IObservable
{
    protected $observers = [];

    protected $event;

    public function register(IObserver $IObserver)
    {
        $observerKey = spl_object_hash($IObserver);
        $this->observers[$observerKey] = $IObserver;
    }

    public function unregister(IObserver $IObserver)
    {
        $observerKey = spl_object_hash($IObserver);
        unset($this->observers[$observerKey]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function setEvent($event)
    {
        $this->event = $event;
        $this->notify();
    }
}