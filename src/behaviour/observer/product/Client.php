<?php
namespace src\behaviour\observer;

class Client
{
    public function updatePrice(): void
    {
        $product = new Product(10000);
        $product->attachPriceObservers();
        $product->changePrice(5000);
    }
}
