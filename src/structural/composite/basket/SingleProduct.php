<?php

namespace src\structural\composite\basket;

class SingleProduct implements ProductItem {

    private $price;

    /**
     * @param $product
     */
    public function __construct($price) {
        $this->price = $price;
    }


    public function price(): int {
        return $this->price;
    }
}
