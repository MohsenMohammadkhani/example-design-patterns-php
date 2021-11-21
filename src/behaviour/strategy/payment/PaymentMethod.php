<?php
namespace src\behaviour\strategy\payment;

interface PaymentMethod
{
    public function doPayment(Order $order);
}
