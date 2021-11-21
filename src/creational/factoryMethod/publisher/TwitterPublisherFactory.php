<?php

namespace src\creational\factoryMethod\publisher;

class TwitterPublisherFactory extends MessagePublisher
{
    protected function createPublisher(): Publisher
    {
        return new TwitterPublisher();
    }
}
