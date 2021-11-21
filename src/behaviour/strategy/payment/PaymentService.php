<?php
namespace src\behaviour\strategy\payment;

class PaymentService
{
    private $paymentMethod;

    public function setPayment(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function pay(Order $order)
    {
        $this->paymentMethod->doPayment($order);
    }
}
