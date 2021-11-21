<?php

namespace src\structural\Decorator\Invoice;

class VATInvoicePrice extends InvoiceDecorator {
    public function price(): int {
        return parent::price() + (parent::price() * 0.5);
    }
}
