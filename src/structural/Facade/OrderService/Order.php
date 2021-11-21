<?php

namespace src\structural\Facade\OrderService;

class Order {

    private $userID;
    private $amount;
    private $orderLine;
    private $discount;

    /**
     * @param $userID
     * @param $amount
     * @param $orderLine
     * @param $discount
     */
    public function __construct($userID, $amount, $orderLine, $discount) {
        $this->userID = $userID;
        $this->amount = $amount;
        $this->orderLine = $orderLine;
        $this->discount = $discount;
    }

    /**
     * @return mixed
     */
    public function getUserID() {
        return $this->userID;
    }

    /**
     * @return mixed
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getOrderLine() {
        return $this->orderLine;
    }

    /**
     * @return mixed
     */
    public function getDiscount() {
        return $this->discount;
    }



}
