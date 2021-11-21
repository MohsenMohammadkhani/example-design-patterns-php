<?php

namespace src\creational\Bulider\Order;

class OrderBuilder {
    private $customer;
    private $totalPrice;
    private $finalPrice;
    private $deliverAddress;
    private $orderLine;
    private $status;

    private $order;

    public static function forget(?Order $order): OrderBuilder {
        return new OrderBuilder($order);
    }

    public function __construct(?Order $order) {
        $this->order = $order;
    }

    public function withCustomer($customer) {
        $this->customer = $customer;
        return $this;
    }

    public function withTotalPrice($totalPrice): OrderBuilder {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    public function withFinalPrice($finalPrice): OrderBuilder {
        $this->finalPrice = $finalPrice;
        return $this;
    }

    public function withDeliverAddress($deliverAddress): OrderBuilder {
        $this->deliverAddress = $deliverAddress;
        return $this;
    }

    public function withOrderLine($orderLine): OrderBuilder {
        $this->orderLine = $orderLine;
        return $this;
    }

    public function withStatus($status): OrderBuilder {
        $this->status = $status;
        return $this;
    }

    public function build(): Order {
        return new Order(
            $this->customer || $this->order->getCustomer(),
            $this->totalPrice || $this->order->getTotalPrice(),
            $this->finalPrice || $this->order->getFinalPrice(),
            $this->deliverAddress || $this->order->getDeliverAddress(),
            $this->orderLine || $this->order->getOrderLine(),
            $this->status || $this->order->getStatus()
        );

    }

}
