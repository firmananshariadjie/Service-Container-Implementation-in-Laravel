<?php

namespace App\Billing;

interface paymentGatewayContract
{
    public function setDiscount($amount);
    public function charge($amount);
}
