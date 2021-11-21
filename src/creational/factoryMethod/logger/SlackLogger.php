<?php

namespace src\creational\factoryMethod\logger;

class SlackLogger extends Logger
{
    protected function log(LogMessage $message)
    {
        echo ("log  in  TelegramLogger");
        dd($message);
    }
}
