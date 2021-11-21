<?php

namespace src\creational\factoryMethod\account;

class GoldAccount implements Account
{
    public function interestRate(): float
    {
        return 0.05;
    }

    public function minimumBalanceDefinition(): float
    {
        return 1000000;
    }
}
