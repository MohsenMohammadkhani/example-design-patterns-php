<?php

namespace src\structural\adapter\payment;

class Invoice {

    private $amount;

    /**
     * @param $amount
     */
    public function __construct(int $amount) {
        $this->amount = $amount;
    }


    public function getAmount(): int {
        return $this->amount;
    }
}
