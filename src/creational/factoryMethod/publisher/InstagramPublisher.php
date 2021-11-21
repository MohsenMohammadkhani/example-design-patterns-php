<?php

namespace src\creational\factoryMethod\publisher;

class InstagramPublisher implements Publisher
{
    public function publish(Message $message)
    {
        echo ("publish in  InstagramPublisher");
        dd($message);
    }
}
