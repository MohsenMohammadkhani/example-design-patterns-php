<?php

namespace src\behaviour\chainOfResponsibility\productAccess\Verifiers;

use App\Models\Product;
use App\Models\User;
use src\behaviour\chainOfResponsibility\productAccess\Verifier;

class UserActivationVerifier extends Verifier
{
    public function verify(User $user, Product $product): bool
    {

        if (!$user->isActive()) {
            return false;
        }
        return parent::verify($user, $product);
    }

}
