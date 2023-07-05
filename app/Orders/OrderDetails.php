<?php

namespace App\Orders;

use App\Billing\paymentGatewayContract;

class OrderDetails
{
    private $paymentGateway;

    public function __construct(paymentGatewayContract $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }
    public function all()
    {
        $this->paymentGateway->setDiscount(500);

        return [
            'name' => 'Victor',
            'address' => '123 Coder\'s Tape Street'
        ];
    }
}
