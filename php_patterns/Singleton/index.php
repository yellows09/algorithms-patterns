<?php
include_once "Preferences.php";

$test = Preferences::getInstance();
$test->setProperty('name','Ivan');
echo $test->getProperty('name');
unset($test);
$t = Preferences::getInstance();
echo $t->getProperty('name');