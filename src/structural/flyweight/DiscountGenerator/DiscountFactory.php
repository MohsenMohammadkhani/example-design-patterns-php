<?php

namespace src\structural\flyweight\DiscountGenerator;

class DiscountFactory
{

    private $constrained = [];
    private $discount = [];
    public function createDiscount($code, $userID, $minAmount, $maxAmount, $limit, $expirationDate, $percent)
    {
        $constrained = $this->createConstrained($minAmount, $maxAmount, $limit, $expirationDate, $percent);
        $discount = new Discount($code, $userID, $constrained);
        $this->discount[] = $discount;
        return $discount;
    }

    private function createConstrained($minAmount, $maxAmount, $limit, $expirationDate, $percent): DiscountConstrained
    {
        $key = $this->createKey(get_defined_vars());
        if ($this->constrained[$key]) {
            $this->constrained = new DiscountConstrained($minAmount, $maxAmount, $limit, $expirationDate, $percent);
        }
        return $this->constrained;
    }

    private function createKey($data): string
    {
        ksort($data);
        return md5(implode('-', $data));
    }

    private function getDiscount(): array
    {
        return $this->discount;
    }
}
