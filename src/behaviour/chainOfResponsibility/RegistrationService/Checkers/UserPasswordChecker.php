<?php
namespace src\behaviour\chainOfResponsibility\RegistrationService\Checkers;

use src\behaviour\chainOfResponsibility\RegistrationService\Checkers;
use src\behaviour\chainOfResponsibility\RegistrationService\RegistrationRequest;

class UserPasswordChecker extends Checkers
{

    public function check(RegistrationRequest $request)
    {
        if ($this->isPasswordChecker($request->getPassword())) {
            return false;
        }
        return parent::check($request);

    }

    private function isPasswordChecker($email)
    {
        return true;
    }

}
