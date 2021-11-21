<?php
namespace src\behaviour\observer\observers;

use SplSubject;

class ProductOfferProductPriceObservers implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        $productNewPrice = $subject->getPrice();
    }
}
