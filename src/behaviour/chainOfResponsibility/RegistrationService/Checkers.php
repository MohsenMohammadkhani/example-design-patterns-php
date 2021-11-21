<?php
namespace src\behaviour\chainOfResponsibility\RegistrationService;

abstract class Checkers
{
    private $nextChecker;

    public function __construct(Checkers $nextChecker = null)
    {
        $this->nextChecker = $nextChecker;
    }

    public function check(RegistrationRequest $request)
    {
        if (!$this->nextChecker) {
            return true;
        }

        return $this->nextChecker->check($request);
    }
}
