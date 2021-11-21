<?php

namespace src\structural\bridge\payment\method;

use src\structural\bridge\payment\Invoice;
use src\structural\bridge\payment\PaymentMethod;

class ChequePayment extends PaymentMethod {

    public function startPay(Invoice $invoice) {
        $this->handler->pay($invoice);
    }
}
