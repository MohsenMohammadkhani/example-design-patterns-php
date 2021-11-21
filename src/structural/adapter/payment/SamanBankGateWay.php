<?php

namespace src\structural\adapter\payment;

class SamanBankGateWay {

    private $apiKey;

    /**
     * @param $apiKey
     */
    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }

    public function pay(int $amount):void {

    }

}
