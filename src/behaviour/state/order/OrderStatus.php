<?php
namespace src\behaviour\state\order;

abstract class OrderStatus
{

    protected $order;

    public function setOrder(Order $order)
    {
        $this->order = $order;
    }

    abstract public function pending();
    abstract public function paid();
    abstract public function prepare();
    abstract public function ready();
    abstract public function sent();
    abstract public function delivered();

}
