<?php

namespace src\behaviour\chainOfResponsibility\productAccess;

use App\Models\Product;
use App\Models\User;

abstract class Verifier
{
    private $nextVerifier;

    public function __construct(Verifier $nextVerifier = null)
    {
        $this->nextVerifier = $nextVerifier;
    }

    public function verify(User $user, Product $product): bool
    {
        if (!$this->nextVerifier) {
            return true;
        }
        return $this->nextVerifier->verify($user, $product);
    }
}
