<?php
//include_once 'Payment.php';
//include_once 'PaymentProcess.php';
//include_once 'PaymentPrivate.php';
//
//include_once 'Lecture.php';
//include_once 'Seminar.php';
//$test = new Lecture(2, new PaymentProcess());
//echo $test->cost();
$child_pid = pcntl_fork();
if ($child_pid) {
    echo $child_pid;
    // Выходим из родительского, привязанного к консоли, процесса
    exit();
}
// Делаем основным процессом дочерний.
posix_setsid();