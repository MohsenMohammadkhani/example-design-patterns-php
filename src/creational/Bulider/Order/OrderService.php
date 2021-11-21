<?php

namespace src\creational\Bulider\Order;

class OrderService {
    public function makeOrder(NewOrderData $newOrderData) {
        OrderBuilder::forget()->withDeliverAddress($newOrderData->deliveryAddress)->build();
    }

    public function reOrder(Order $order) {
        $reOrder = OrderBuilder::forget($order)->withDeliverAddress("dfdsfs")->build();
    }
}
