<?php

namespace src\creational\factoryMethod\account;

class GeneralAccountFactory extends AccountCreator
{
    public function getAccount(): Account
    {
        return new GeneralAccount();
    }
}
