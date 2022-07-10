<?php
include_once'CostStrategy.php';
class PaymentProcess extends CostStrategy
{
    public function costP(Payment $payment)
    {
        return $payment->getDuration() * $payment::PRICE_DEFAULT;
    }
}