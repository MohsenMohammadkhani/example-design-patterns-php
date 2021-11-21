<?php

class Order implements \SplSubject
{
    private const PENDING = 1;
    private const PROCESSING = 2;
    private const READY = 3;
    private const SENT = 4;
    private const DELIVERED = 5;
    private $status;

    private $observers;

    public function __construct()
    {
        $this->status = self::PENDING;
        $this->observers = new \SplObjectStorage();
    }

    public function process()
    {
        $this->status = self::PENDING;
        $this->registerProccessObserver();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function ready()
    {
        $this->status = self::READY;
        $this->clearProcessingObservers();
    }

    private function clearProcessingObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->detach($this);
        }
    }

    private function registerProccessObserver()
    {
        $this->observers->attach(new OrderPriceObservers());
    }
}
