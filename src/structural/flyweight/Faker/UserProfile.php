<?php
namespace src\structural\flyweight\Faker;

class UserProfile
{
    private $gender;
    private $age;
    private $city;

    public function __construct($gender, $age, $city)
    {
        $this->gender = $gender;
        $this->age = $age;
        $this->city = $city;
    }
}
