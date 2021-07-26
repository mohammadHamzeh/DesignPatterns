<?php


namespace App;


class Publisher implements Observerable
{
    protected $observers = [];
    protected $event;

    public function register(IObserver $observerable)
    {
        $this->observers[spl_object_hash($observerable)] = $observerable;
    }

    public function unregister(IObserver $observerable)
    {
        unset($this->observers[spl_object_hash($observerable)]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param mixed $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
        $this->notify();
    }

    /**
     * @return array
     */
    public function getObservers(): array
    {
        return $this->observers;
    }
}