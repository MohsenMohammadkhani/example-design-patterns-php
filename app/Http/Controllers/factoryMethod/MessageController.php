<?php

namespace App\Http\Controllers\factoryMethod;

use App\Http\Controllers\Controller;
use src\creational\factoryMethod\publisher\Message;
use src\creational\factoryMethod\publisher\MessagePublisher;
use src\creational\factoryMethod\publisher\Publisher;

class MessageController extends Controller
{
    private $publisher;

    public function __construct(MessagePublisher $publisher)
    {
        $this->publisher =resolve(MessagePublisher::class);
//        $this->publisher = $publisher;
    }

    public function publishMessage()
    {
        echo $this->publisher->publish(new Message("title", "1.png", "content"));
    }

}
