<?php

namespace src\creational\factoryMethod\account;

class GoldAccountFactory extends AccountCreator
{
    public function getAccount(): Account
    {
        return new GoldAccount();
    }
}
