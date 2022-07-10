<?php
include_once 'CommsManager.php';
include_once 'BloggsApptEncoder.php';

class BloggsCommsManagers extends CommsManager
{

    public function getHeadText(): string
    {
        return 'Head type blog'. PHP_EOL;
    }

    public function getFooterText(): string
    {
        return 'Low type blog'. PHP_EOL;
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }
}