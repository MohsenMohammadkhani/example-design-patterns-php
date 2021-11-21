<?php
namespace src\behaviour\observer;

use SplObserver;
use src\behaviour\observer\observers\ProductOfferProductPriceObservers;

class Product implements \SplSubject
{
    private $price;
    private $observers;

    public function __construct($price)
    {
        $this->price = $price;
        $this->observers = new \SplObjectStorage();
    }

    public function changePrice(int $price)
    {
        if ($this->price === $price) {
            return;
        }
        $this->price = $price;
        $this->notify();
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

    public function attachPriceObservers(): void
    {
        $this->product->attach(new ProductOfferProductPriceObservers());
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
