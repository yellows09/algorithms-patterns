<?php
include_once 'Mail.php';
class RegisterMsg
{
    public function register(string $where){
        $notifier = Mail::send($where);
        $notifier->inform();
    }
}
