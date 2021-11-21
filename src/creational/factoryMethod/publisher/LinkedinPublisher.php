<?php

namespace src\creational\factoryMethod\publisher;

class LinkedinPublisher implements Publisher
{
    public function publish(Message $message)
    {
        echo ("publish in  LinkedinPublisher");
        dd($message);
    }
}
