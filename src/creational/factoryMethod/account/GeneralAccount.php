<?php

namespace src\creational\factoryMethod\account;

class GeneralAccount implements Account {
    public function interestRate(): float {
        return 0.5;
    }

    public function minimumBalanceDefinition(): float {
        return 200000;
    }
}
