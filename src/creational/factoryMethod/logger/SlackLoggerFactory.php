<?php
namespace src\creational\factoryMethod\logger;

class SlackLoggerFactory extends MassagerLogger
{
    public function createLogger(): Logger
    {
        return new SlackLogger();
    }
}
