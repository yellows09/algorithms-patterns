<?php
abstract class Payment{
    const PRICE_DEFAULT = 500;
    const PRICE_PRIVATE = 1000;
    public function __construct(private readonly int $duration, private readonly CostStrategy $costStrategy )
    {
    }
    public function getDuration(){
        return $this->duration;
    }
    public function cost(){
        return $this->costStrategy->costP($this);
    }
}