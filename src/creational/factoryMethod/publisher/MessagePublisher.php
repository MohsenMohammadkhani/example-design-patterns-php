<?php

namespace src\creational\factoryMethod\publisher;

abstract class MessagePublisher
{

    public function publish(Message $message)
    {
        echo  "this is publish in MessagePublisher<br>";
        $publisher = $this->createPublisher();
        $publisher->publish($message);
    }

    abstract protected function createPublisher(): Publisher;
}
