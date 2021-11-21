<?php

namespace src\creational\factoryMethod\account;

class VIPAccount implements Account
{
    public function interestRate(): float
    {
        return 0.25;
    }

    public function minimumBalanceDefinition(): float
    {
        return 500000;
    }
}
