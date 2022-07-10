<?php
include_once "Employee.php";
class cleanUp extends Employee
{
    public function fire()
    {
        return "{$this->name}: Я буду чистить";
    }
}