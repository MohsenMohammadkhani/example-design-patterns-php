<?php
namespace src\behaviour\Mediator\chatRoom;

use src\behaviour\Mediator\EventDispatch\Emitter;
use src\behaviour\Mediator\EventDispatch\Message;
use src\behaviour\Mediator\EventDispatch\User;

class ChatRoom
{

    private $users = [];
    private $emitter;

    public function __construct(Emitter $emitter)
    {
        $this->emitter = $emitter;
    }

    public function connect(User $user)
    {
        $this->users[$user->getID()] = $user;
    }

    public function disconnect(User $user)
    {
        unset($this->users[$user->getID()]);
    }

    public function send(Message $message)
    {
        if (!isset($this->users[$message->getReceiver()])) {
            return;
        }
        $user = $this->users[$message->getReceiver()];
        $this->emitter->emit($user, $message);
    }
}
