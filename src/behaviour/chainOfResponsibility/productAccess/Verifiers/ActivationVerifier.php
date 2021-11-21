<?php
namespace src\behaviour\chainOfResponsibility\productAccess\Verifiers;

use App\Models\Product;
use App\Models\Subscription;
use App\Models\User;
use src\behaviour\chainOfResponsibility\productAccess\Verifier;

class ActivationVerifier extends Verifier
{
    public function verify(User $user, Product $product): bool
    {

        $subscription = Subscription::findByUserAndProduct($user, $product);
        if (!$subscription->isActive()) {
            return false;
        }
        return parent::verify($user, $product);
    }

}
