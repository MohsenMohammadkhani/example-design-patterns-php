<?php

namespace src\structural\bridge\payment;

interface PaymentHandler {
    public function pay(Invoice $invoice);
}
