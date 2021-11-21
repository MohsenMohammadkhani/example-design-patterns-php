<?php
namespace src\behaviour\Mediator\EventDispatch;

class Message
{
    private $sender;
    private $receiver;
    private $body;

    public function __construct($sender, $receiver, $body)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->body = $body;
    }

    public function getSender()
    {
        return $this->sender;
    }

    public function getReceiver()
    {
        return $this->receiver;
    }

    public function getBody()
    {
        return $this->body;
    }
}
