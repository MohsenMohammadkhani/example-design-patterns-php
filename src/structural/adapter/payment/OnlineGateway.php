<?php

namespace src\structural\adapter\payment;

interface OnlineGateway {
    public function startPay(Invoice $invoice):void;
}
