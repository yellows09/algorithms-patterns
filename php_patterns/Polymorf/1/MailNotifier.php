<?php
include_once 'Mail.php';
class MailNotifier extends Mail
{
    public function inform(string $message = null){
        print 'Уведомление для почты';
    }
}