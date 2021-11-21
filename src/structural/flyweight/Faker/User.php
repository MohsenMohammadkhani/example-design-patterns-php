<?php
namespace src\structural\flyweight\Faker;

class User
{
    private $firstName;
    private $lastName;
    private $userProfile;

    public function __construct($firstName, $lastName, $userProfile)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userProfile = $userProfile;
    }
}
