<?php
namespace src\creational\factoryMethod\logger;

abstract class MassagerLogger
{
    public function log(LogMessage $message)
    {
        $logger = $this->createLogger();
        $logger->log($message);
    }

    abstract protected function createLogger(): Logger;
}
