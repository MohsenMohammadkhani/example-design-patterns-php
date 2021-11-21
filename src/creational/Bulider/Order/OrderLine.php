<?php

namespace src\creational\Bulider\Order;

class OrderLine {
    private $count;
    private $itemName;
    private $price;

    /**
     * @param $count
     * @param $itemName
     * @param $price
     */
    public function __construct($count, $itemName, $price) {
        $this->count = $count;
        $this->itemName = $itemName;
        $this->price = $price;
    }


    /**
     * @return mixed
     */
    public function getCount() {
        return $this->count;
    }

    /**
     * @return mixed
     */
    public function getItemName() {
        return $this->itemName;
    }

    /**
     * @return mixed
     */
    public function getPrice() {
        return $this->price;
    }
}
