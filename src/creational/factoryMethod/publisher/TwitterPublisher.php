<?php

namespace src\creational\factoryMethod\publisher;

class TwitterPublisher implements Publisher
{
    public function publish(Message $message)
    {
        echo ("publish in  TwitterPublisher");
        dd($message);
    }
}
