<?php
include_once 'Mail.php';
class TextNotifier extends Mail
{
    public function inform(string $message = null){
        print 'Уведомление для смс';
    }
}