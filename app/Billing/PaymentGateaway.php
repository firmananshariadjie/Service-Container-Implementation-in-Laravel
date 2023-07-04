<?php

namespace App\Billing;

use Illuminate\Support\Str;

class PaymentGateaway
{
    private $curency;
    public function __construct($curency)
    {
        $this->curency = $curency;
    }
    public function charge($amount)
    {
        //charge the Bank

        return [
            'amount' => $amount,
            'confirmation_number' => Str::random(),
            'curency' => $this->curency
        ];
    }
}
