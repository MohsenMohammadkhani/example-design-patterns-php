<?php
namespace src\behaviour\state\order;

use src\behaviour\state\order\orderStatuses\Pending;

class Order
{
    private $status;

    public function __construct()
    {
        $this->transitTo(new Pending());
    }

    public function transitTo(OrderStatus $status)
    {
        $this->status = $status;
        $this->status->setOrder($this);
    }

    public function pending()
    {
        $this->status->pending();
    }

    public function paid()
    {
        $this->status->paid();
    }

    public function prepare()
    {
        $this->status->prepare();
    }

    public function ready()
    {
        $this->status->ready();
    }

    public function sent()
    {
        $this->status->sent();
    }

    public function delivered()
    {
        $this->status->delivered();
    }

}
