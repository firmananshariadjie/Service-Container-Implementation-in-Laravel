<?php

namespace App\Http\Controllers;

use App\Billing\paymentGatewayContract;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, paymentGatewayContract $paymentGateway)
    {
        $order = $orderDetails->all();
        dd([$order, $paymentGateway->charge(2500)]);
    }
}
