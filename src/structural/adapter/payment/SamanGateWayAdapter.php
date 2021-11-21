<?php

namespace src\structural\adapter\payment;

class SamanGateWayAdapter implements OnlineGateway {

    private $samanKey;

    /**
     * @param $samanKey
     */
    public function __construct( SamanBankGateWay $samanKey) {
        $this->samanKey = $samanKey;
    }


    public function startPay(Invoice $invoice): void {
        $this->samanKey->pay($invoice->getAmount());
    }
}
