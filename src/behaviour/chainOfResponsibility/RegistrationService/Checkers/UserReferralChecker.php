<?php
namespace src\behaviour\chainOfResponsibility\RegistrationService\Checkers;

use src\behaviour\chainOfResponsibility\RegistrationService\Checkers;
use src\behaviour\chainOfResponsibility\RegistrationService\RegistrationRequest;

class UserReferralChecker extends Checkers
{

    public function check(RegistrationRequest $request)
    {
        if ($this->isReferralChecker($request->getReferralCode())) {
            return false;
        }
        return parent::check($request);

    }

    private function isReferralChecker($email)
    {
        return true;
    }

}
