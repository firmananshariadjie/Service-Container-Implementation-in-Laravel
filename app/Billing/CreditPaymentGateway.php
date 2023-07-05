<?php

namespace App\Billing;

use Illuminate\Support\Str;

class CreditPaymentGateway implements paymentGatewayContract
{
    private $curency, $discount;

    public function __construct($curency)
    {
        $this->curency = $curency;
        $this->discount = 0;
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }

    public function charge($amount)
    {
        //charge the Bank
        $fees = $amount * 0.03;
        return [
            'actual_amount' => $amount,
            'amount_after_discount_and_fees' => ($amount - $this->discount) + $fees,
            'confirmation_number' => Str::random(),
            'curency' => $this->curency,
            'discount' => $this->discount,
            'fees' => $fees
        ];
    }
}
