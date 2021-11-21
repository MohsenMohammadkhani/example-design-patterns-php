<?php
namespace src\behaviour\Mediator\EventDispatch;

class EventDispatcher
{
    private $observer;

    public function attach(string $event, Observer $observer): void
    {
        $this->initEventGroup($event);
        $this->observer[$event][] = $observer;
    }

    public function detach(string $event, Observer $observer): void
    {
        foreach ($this->getEventObserver($event) as $key => $observerItem) {
            if ($observer === $observerItem) {
                unset($this->observer[$event][$key]);
            }
        }
    }

    public function fire(string $event, object $emitter, $data = null)
    {
        foreach ($this->getEventObserver($event) as $observer) {
            $observer->update($event, $emitter, $data);
        }
    }

    private function initEventGroup(string $event)
    {
        if (!isset($this->observer[$event])) {
            $this->observer[$event] = [];
        }
    }

    private function getEventObserver(string $event)
    {
        $this->initEventGroup($event);
        return $this->observer[$event];
    }
}
