<?php
namespace src\creational\factoryMethod\logger;

class TelegramLoggerFactory extends MassagerLogger
{
    protected function createLogger(): Logger
    {
        return new TelegramLogger();
    }
}
