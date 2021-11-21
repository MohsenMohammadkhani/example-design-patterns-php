<?php
namespace src\behaviour\chainOfResponsibility\RegistrationService;

class RegistrationRequest
{
    private $emailAddress;
    private $referralCode;
    private $password;

    public function __construct($emailAddress, $referralCode, $password)
    {
        $this->emailAddress = $emailAddress;
        $this->referralCode = $referralCode;
        $this->password = $password;
    }

    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    public function getReferralCode()
    {
        return $this->referralCode;
    }

    public function getPassword()
    {
        return $this->password;
    }
}
