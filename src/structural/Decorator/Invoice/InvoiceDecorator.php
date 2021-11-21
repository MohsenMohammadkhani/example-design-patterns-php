<?php

namespace src\structural\Decorator\Invoice;

class InvoiceDecorator implements InvoicePrice {
    private $invoicePrice;

    /**
     * @param InvoicePrice $invoicePrice
     */
    public function __construct(InvoicePrice $invoicePrice) {
        $this->invoicePrice = $invoicePrice;
    }


    public function price(): int {
        return $this->invoicePrice->price();
    }
}
