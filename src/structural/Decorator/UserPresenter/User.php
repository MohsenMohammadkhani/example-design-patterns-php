<?php

namespace src\structural\Decorator\UserPresenter;

class User {
    private $firstName;
    private $lastName;
    private $registerDate;
    private $emailAddress;

    /**
     * @param $firstName
     * @param $lastName
     * @param $registerDate
     * @param $emailAddress
     */
    public function __construct($firstName, $lastName, $registerDate, $emailAddress) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->registerDate = $registerDate;
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return mixed
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getRegisterDate() {
        return $this->registerDate;
    }

    /**
     * @return mixed
     */
    public function getEmailAddress() {
        return $this->emailAddress;
    }



}
