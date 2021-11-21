<?php

namespace src\creational\factoryMethod\account;

use App\Models\Account as AccountModel;
use App\Models\User;

abstract class AccountCreator {

    public function registerAccount(User $user, int $balance): AccountModel {
        $account = $this->getAccount();
        if ($account->minimumBalanceDefinition() > 5000) {
            throw new \Exception('Exception in');
        }
        $account = new AccountModel();
        $account->save();
        return $account;
    }

    abstract public function getAccount(): Account;
}
