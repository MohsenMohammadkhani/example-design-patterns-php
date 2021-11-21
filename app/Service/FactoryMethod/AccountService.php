<?php
namespace App\Service\FactoryMethod;

use App\Models\Account as AccountModel;
use App\Models\User;
use src\creational\factoryMethod\account\AccountCreator;

class AccountService
{

    private $accountRegistry;

    public function __construct(AccountCreator $accountCreator)
    {
        $this->accountRegistry = $accountCreator;
    }

    public function register(User $user, $balance): AccountModel
    {
        return $this->accountRegistry->registerAccount($user, $balance);
    }
}
