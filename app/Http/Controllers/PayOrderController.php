<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateaway;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(PaymentGateaway $paymentGateaway)
    {
        // $paymentGateaway = new PaymentGateaway('usd');

        dd($paymentGateaway->charge(250));
    }
}
