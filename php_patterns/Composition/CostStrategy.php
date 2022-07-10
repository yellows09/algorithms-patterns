<?php

abstract class CostStrategy
{
    abstract public function costP(Payment $payment);
}