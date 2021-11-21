<?php

namespace src\creational\factoryMethod\account;

class VIPAccountFactory extends AccountCreator
{
    public function getAccount(): Account
    {
        return new VIPAccount();
    }
}
