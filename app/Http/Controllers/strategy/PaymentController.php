<?php

namespace App\Http\Controllers\strategy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use src\behaviour\strategy\payment\CashPayment;
use src\behaviour\strategy\payment\ChequePayment;
use src\behaviour\strategy\payment\OnlinePayment;
use src\behaviour\strategy\payment\Order;
use src\behaviour\strategy\payment\PaymentService;

class PaymentController extends Controller
{
    public function startPayment(Request $request): void
    {
        $order = new Order(23500);
        $paymentService = new PaymentService();
        $paymentService->setPayment($this->makePaymentMethod($request->get('payment_method')));
        $paymentService->pay($order);
    }

    private function makePaymentMethod($paymentMethod)
    {
        switch ($paymentMethod) {
            case 'cash':
                return new CashPayment();
                break;
            case 'online':
                return new OnlinePayment();
                break;
            case 'cheque':
                return new ChequePayment();
                break;

            default:
                throw new \RuntimeException('روش پرداخت معتبر نمی باشد');
                break;
        }
    }
}
