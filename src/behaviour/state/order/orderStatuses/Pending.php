<?php
namespace src\behaviour\state\order\orderStatuses;

use src\behaviour\state\order\OrderStatus;

class Pending extends OrderStatus
{
    public function pending()
    {
        throw new \Exception('error');
    }

    public function paid()
    {
        $this->order->transitTo(new Paid());
    }

    public function prepare()
    {
        throw new \Exception('error');
    }

    public function ready()
    {
        throw new \Exception('error');
    }

    public function sent()
    {
        throw new \Exception('error');
    }

    public function delivered()
    {
        throw new \Exception('error');
    }

}
