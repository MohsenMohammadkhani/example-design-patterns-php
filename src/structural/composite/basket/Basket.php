<?php

namespace src\structural\composite\basket;

class Basket {

    private $items = [];

    public function add(ProductItem $productItem) {
        $this->items[] = $productItem;
    }

    public function totalPrice(): int {
        $total = 0;

        foreach ($this->items as $productItem) {
            $total += $productItem->price();
        }
        return $total;
    }

}
