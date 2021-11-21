<?php

namespace src\creational\factoryMethod\logger;

class TelegramLogger implements Logger
{
    public function log(LogMessage $message)
    {
        echo ("log  in  TelegramLogger");
        dd($message);
    }
}
