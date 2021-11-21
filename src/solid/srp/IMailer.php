<?php

namespace src\solid\srp;

interface IMailer
{
    public function send(Message $message);
}
