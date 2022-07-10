<?php
include_once 'Payment.php';
include_once 'PaymentProcess.php';
include_once 'PaymentPrivate.php';

include_once 'Lecture.php';
include_once 'Seminar.php';
$test = new Lecture(2, new PaymentPrivate());
echo $test->cost();