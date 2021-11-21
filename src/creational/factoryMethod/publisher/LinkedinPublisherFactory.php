<?php

namespace src\creational\factoryMethod\publisher;

class LinkedinPublisherFactory extends MessagePublisher
{
    public function createPublisher(): Publisher
    {
        return new LinkedinPublisher();
    }

}
