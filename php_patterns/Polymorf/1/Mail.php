<?php
include_once 'TextNotifier.php';
include_once 'MailNotifier.php';
abstract class Mail
{
    public static function send(string $type)
    {
        if ($type == 'text') {
            return new TextNotifier();
        }
        if ($type == 'mail') {
            return new MailNotifier();
        }
//        return null;
    }
}