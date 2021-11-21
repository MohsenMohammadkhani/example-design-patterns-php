<?php
namespace src\behaviour\chainOfResponsibility\RegistrationService\Checkers;

use App\Models\User;
use src\behaviour\chainOfResponsibility\RegistrationService\Checkers;
use src\behaviour\chainOfResponsibility\RegistrationService\RegistrationRequest;

class UserEmailChecker extends Checkers
{

    public function check(RegistrationRequest $request)
    {
        if ($this->emailExist($request->getEmailAddress())) {
            return false;
        }
        return parent::check($request);

    }

    private function emailExist($email)
    {
        return User::query()->where('email', $email)->count() > 0;
    }

}
