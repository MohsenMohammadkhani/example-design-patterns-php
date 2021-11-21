<?php

namespace src\structural\bridge\payment;

abstract class PaymentMethod {
    protected $handler;

    /**
     * @param PaymentHandler $handler
     */
    public function __construct(PaymentHandler $handler) {
        $this->handler = $handler;
    }

    abstract public function startPay(Invoice $invoice);
}
