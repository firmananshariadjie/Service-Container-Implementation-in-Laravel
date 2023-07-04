<?php

namespace App\Billing;

use Illuminate\Support\Str;

class PaymentGateway
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

        return [
            'amount' => $amount - $this->discount,
            'confirmation_number' => Str::random(),
            'curency' => $this->curency,
            'discount' => $this->discount
        ];
    }
}
