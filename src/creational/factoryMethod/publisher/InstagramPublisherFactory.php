<?php

namespace src\creational\factoryMethod\publisher;

class InstagramPublisherFactory extends MessagePublisher
{
    protected function createPublisher(): Publisher
    {
        return new InstagramPublisher();
    }
}
