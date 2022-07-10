<?php

class PaymentPrivate extends CostStrategy
{

    public function costP(Payment $payment)
    {
        return $payment->getDuration() * $payment::PRICE_PRIVATE;
    }
}