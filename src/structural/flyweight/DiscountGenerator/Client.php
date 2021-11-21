<?php
namespace src\structural\flyweight\DiscountGenerator;

class Client
{

    public function __construct(DiscountFactory $discountFactory)
    {
        $this->discountFactory = $discountFactory;
    }

    public function createDiscount()
    {
        foreach (range(1, 1000) as $counter) {
            $dateRange = mt_rand(1, 5);
            $limitRange = mt_rand(1, 3);
            $minRange = [0, 10000, 20000];
            $maxRange = [1000000, 2000000, 50000000];
            $percentRange = mt_rand(15, 35);
            $this->discountFactory->createDiscount(
                'da66sf47al5as5fa5s4sa5dascas5caca5c',
                0,
                "2021/5/6 12:00",
                $limitRange,
                $minRange,
                $maxRange,
                $percentRange,
            );
        }
    }
}
