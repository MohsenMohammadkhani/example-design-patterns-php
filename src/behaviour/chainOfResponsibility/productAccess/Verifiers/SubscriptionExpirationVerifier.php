<?php
namespace src\behaviour\chainOfResponsibility\productAccess\Verifiers;

use App\Models\Product;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use src\behaviour\chainOfResponsibility\productAccess\Verifier;

class SubscriptionExpirationVerifier extends Verifier
{
    public function verify(User $user, Product $product): bool
    {

        $subscription = Subscription::findByUserAndProduct($user, $product);
        if (!$this->isExpired($subscription->expires_at)) {
            return false;
        }
        return parent::verify($user, $product);
    }

    private function isExpired(Carbon $expirationDate): bool
    {
        return Carbon::now()->gt($expirationDate);
    }
}
