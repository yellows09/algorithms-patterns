<?php
include_once "Employee.php";
class Working extends Employee
{

    public function fire()
    {
        print "{$this->name}: Я буду работать";
    }
}