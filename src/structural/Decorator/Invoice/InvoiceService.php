<?php

namespace src\structural\Decorator\Invoice;

class InvoiceService {

    public function calculatePrice(): int {
        $invoice = new Invoice();
        $serviceInvoicePrice = new ServiceInvoicePrice($invoice);
        $VATInvoicePrice = new VATInvoicePrice($serviceInvoicePrice);
        return $VATInvoicePrice->price();
    }
}
