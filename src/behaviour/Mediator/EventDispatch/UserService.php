<?php

namespace src\behaviour\Mediator\EventDispatch;

class UserService
{
    private $eventDispatch;

    public function __construct(EventDispatcher $eventDispatch)
    {
        $this->eventDispatch = $eventDispatch;
    }

    public function deleteUser(int $userID)
    {
        $this->eventDispatch->fire('user:deleted', $this, [
            'userID' => $userID,
        ]);
    }
}
