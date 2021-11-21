<?php
namespace src\behaviour\strategy\payment;

interface DeliveryMethod
{
    public function price(Order $order);
    public function delivery(Order $order);
}
