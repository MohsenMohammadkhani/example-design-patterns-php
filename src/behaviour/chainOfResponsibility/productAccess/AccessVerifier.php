<?php
namespace src\behaviour\chainOfResponsibility\productAccess;

use App\Models\Product;
use App\Models\User;
use src\behaviour\chainOfResponsibility\productAccess\Verifiers\ActivationVerifier;
use src\behaviour\chainOfResponsibility\productAccess\Verifiers\SubscriptionExpirationVerifier;
use src\behaviour\chainOfResponsibility\productAccess\Verifiers\SubscriptionVerifier;
use src\behaviour\chainOfResponsibility\productAccess\Verifiers\UserActivationVerifier;

class AccessVerifier
{

    public function verifier(User $user, Product $product): bool
    {
        return $this->buildVerifierChain()->verify($user, $product);
    }

    private function buildVerifierChain()
    {
        $activationVerifier = new ActivationVerifier();
        $subscriptionExpirationVerifier = new SubscriptionExpirationVerifier($activationVerifier);
        $activationVerifier = new SubscriptionVerifier($subscriptionExpirationVerifier);
        return new UserActivationVerifier($activationVerifier);
    }
}
