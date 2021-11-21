<?php

namespace src\structural\Decorator\Invoice;

class Invoice implements InvoicePrice{

    public function price():int {
        return 100000;
    }
}
