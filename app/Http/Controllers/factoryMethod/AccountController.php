<?php

namespace App\Http\Controllers\factoryMethod;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use src\creational\factoryMethod\account\AccountCreator;
use src\creational\factoryMethod\account\GeneralAccountFactory;
use src\creational\factoryMethod\account\GoldAccountFactory;

class AccountController extends Controller
{
    public function register(Request $request)
    {
        $account = $this->createAccountRegister($request->get('account_type'));
        $account->registerAccount(Auth::user(), $request->get('balance'));
    }

    private function createAccountRegister(string $accountType): AccountCreator
    {

        if ($accountType === "gold") {
            return new GoldAccountFactory();
        }

        return new GeneralAccountFactory();
    }
}
