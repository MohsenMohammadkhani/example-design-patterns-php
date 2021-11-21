<?php
namespace src\structural\flyweight\DiscountGenerator;

class Discount
{

    private $code;
    private $userID;
    private $discountConstrained;

    public function __construct(string $code, int $userID, DiscountConstrained $discountConstrained)
    {
        $this->code = $code;
        $this->userID = $userID;
        $this->discountConstrained = $discountConstrained;
    }

    public function getCode(string $code)
    {
        $this->code = $code;
    }

    public function getUserID(int $userID)
    {
        $this->userID = $userID;
    }

    public function getDiscountConstrained(DiscountConstrained $discountConstrained)
    {
        $this->discountConstrained = $discountConstrained;
    }
}
