<?php

namespace src\creational\factoryMethod\account;

interface Account
{
    public function interestRate(): float;
    public function minimumBalanceDefinition(): float;
}
