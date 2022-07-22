<?php

abstract class Calculate
{
    abstract public function calculateSalary();
}

class Cook extends Calculate
{
    public $salary = 500;

    public function calculateSalary()
    {
        return $this->salary;
    }
}

abstract class CalculateDecorator extends Calculate
{
    public $calculated;

    public function __construct(Calculate $calculate)
    {
        $this->calculated = $calculate;
    }
}

class AfterTaxesCook extends CalculateDecorator
{

    public function calculateSalary()
    {
        return $this->calculated->calculateSalary() - 50;
    }
}

class AfterSupply extends CalculateDecorator
{

    public function calculateSalary()
    {
        return $this->calculated->calculateSalary() + 20;
    }
}

$test = new AfterTaxesCook(new AfterSupply(new Cook()));
echo $test->calculateSalary();