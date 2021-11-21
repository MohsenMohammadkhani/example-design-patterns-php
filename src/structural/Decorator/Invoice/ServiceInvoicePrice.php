<?php

namespace src\structural\Decorator\Invoice;

class ServiceInvoicePrice extends InvoiceDecorator {

    public function price():int {
        return parent::price() + 2000;
    }
}
