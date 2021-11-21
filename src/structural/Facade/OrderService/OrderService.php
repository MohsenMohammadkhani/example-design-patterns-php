<?php

namespace src\structural\Facade\OrderService;

class OrderService {

    private $discountService;
    private $qualityService;

    /**
     * @param $discountService
     * @param $qualityService
     */
    public function __construct(DiscountService $discountService,QualityService $qualityService) {
        $this->discountService = $discountService;
        $this->qualityService = $qualityService;
    }


    public function register(Product $product) {
        $this->qualityService->exist($product);
    }
}
