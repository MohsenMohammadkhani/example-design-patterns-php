<?php

namespace src\structural\Facade\OrderService;

class DiscountService {
    private function check(string $coupon): bool {
        return true;
    }

    public function apply(string $coupon): int {
        if (!$this->check($coupon)) {
            throw new \Exception("sdfsdfdsf");
        }

        return 50000;
    }
}
