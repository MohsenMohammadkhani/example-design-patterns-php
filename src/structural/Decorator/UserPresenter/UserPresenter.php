<?php

namespace src\structural\Decorator\UserPresenter;

class UserPresenter {
    private $user;

    /**
     * @param $user
     */
    public function __construct(User $user) {
        $this->user = $user;
    }

    public function fullName(): string {
        return $this->user->getFirstName() + " " + $this->user->getLastName();
    }

    public function persianRegisterDate(): string {
        return $this->user->getRegisterDate();
    }
}
