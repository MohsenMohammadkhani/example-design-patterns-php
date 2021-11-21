<?php

namespace src\structural\bridge\campaign;

abstract class Campaign {

    protected $promotion;

    /**
     * @param $promotion
     */
    public function __construct(Promotion $promotion) {
        $this->promotion = $promotion;
    }

    public function changePromotion(Promotion $promotion) {
        $this->promotion = $promotion;
    }

    abstract public function run();
}
