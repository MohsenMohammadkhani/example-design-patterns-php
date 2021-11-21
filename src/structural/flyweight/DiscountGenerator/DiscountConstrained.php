<?php

namespace src\structural\flyweight\DiscountGenerator;

class DiscountConstrained
{
    private $minAmount;
    private $maxAmount;
    private $limit;
    private $expirationDate;
    private $percent;

    public function __construct($minAmount, $maxAmount, $limit, $expirationDate, $percent)
    {
        $this->minAmount = $minAmount;
        $this->maxAmount = $maxAmount;
        $this->limit = $limit;
        $this->expirationDate = $expirationDate;
        $this->percent = $percent;
    }

    public function getMinAmount($minAmount)
    {
        $this->minAmount = $minAmount;
    }

    public function getMaxAmount($maxAmount)
    {
        $this->maxAmount = $maxAmount;
    }

    public function getLimit($limit)
    {
        $this->limit = $limit;
    }

    public function getExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    public function getPercent($percent)
    {
        $this->percent = $percent;
    }
}
