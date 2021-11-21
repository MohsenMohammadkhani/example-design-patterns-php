<?php
namespace src\behaviour\strategy\payment;

class DeliveryService
{
    private $deliveryMethod;

    public function __construct(DeliveryMethod $deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
    }

    public function startDelivery(Order $order)
    {
        $deliveryPrice = $this->deliveryMethod->price($order);
        $this->deliveryMethod->delivery($order);
    }
}
