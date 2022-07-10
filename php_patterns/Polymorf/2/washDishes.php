<?php
include_once "Employee.php";
class washDishes extends Employee
{
    public function fire()
    {
        return "{$this->name}: Я буду мыть посуду";
    }
}