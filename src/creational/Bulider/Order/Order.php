<?php

namespace src\creational\Bulider\Order;

class Order {

    private $customer;
    private $totalPrice;
    private $finalPrice;
    private $deliverAddress;
    private $orderLine;
    private $status;
    /**
     * @param $customer
     * @param $totalPrice
     * @param $finalPrice
     * @param $deliverAddress
     * @param $orderLine
     * @param $status
     */
    public function __construct($customer, $totalPrice, $finalPrice, $deliverAddress, $orderLine, $status) {
        $this->customer = $customer;
        $this->totalPrice = $totalPrice;
        $this->finalPrice = $finalPrice;
        $this->deliverAddress = $deliverAddress;
        $this->orderLine = $orderLine;
        $this->status = $status;
    }



    /**
     * @return mixed
     */
    public function getCustomer() {
        return $this->customer;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice() {
        return $this->totalPrice;
    }

    /**
     * @return mixed
     */
    public function getFinalPrice() {
        return $this->finalPrice;
    }

    /**
     * @return mixed
     */
    public function getDeliverAddress() {
        return $this->deliverAddress;
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
    public function getStatus() {
        return $this->status;
    }

}
