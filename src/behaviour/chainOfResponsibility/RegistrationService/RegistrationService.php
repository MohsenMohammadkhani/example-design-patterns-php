<?php
namespace src\behaviour\chainOfResponsibility\RegistrationService;

use src\behaviour\chainOfResponsibility\RegistrationService\Checkers\UserEmailChecker;
use src\behaviour\chainOfResponsibility\RegistrationService\Checkers\UserPasswordChecker;
use src\behaviour\chainOfResponsibility\RegistrationService\Checkers\UserReferralChecker;

class RegistrationService
{
    public function register(RegistrationRequest $request)
    {
        return $this->checkerChain()->check($request);
    }

    public function checkerChain()
    {
        $userReferralChecker = new UserReferralChecker();
        $userPasswordChecker = new UserPasswordChecker($userReferralChecker);
        return new UserEmailChecker($userPasswordChecker);
    }
}
