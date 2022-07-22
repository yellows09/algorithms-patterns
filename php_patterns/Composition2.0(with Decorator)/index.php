<?php
include_once './vendor/autoload.php';
use App\Archer;
use App\Army;
//$test = new Army();
//
//$test->addUnit(new Archer());
//$test->addUnit(new Archer());
//
//$subtest = new Army();
//$subtest->addUnit(new Archer());
//
//print_r('First army attacks with '. $test->bombardStrength());

$test = new \App\Pollution\DiamondPlains(new \App\Pollution\PollutedPlains(new \App\Pollution\Plains()));
print_r($test->getWealthFactor());