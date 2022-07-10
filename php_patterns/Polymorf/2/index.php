<?php
include_once "Working.php";
include_once "Employee.php";
include_once "Boss.php";
include_once "cleanUp.php";
$test = new Boss();
$test->addEmployee(Employee::recruit('Алексей','washDishes'));
$test->projectFire();
echo PHP_EOL;
$cl = new Boss();
$cl->addEmployee(Employee::recruit('Павел','cleanUp'));
$cl->projectFire();