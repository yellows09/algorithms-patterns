<?php
include_once 'CommsManager.php';
include_once 'MegaApptEncoder.php';
class MegaCommsManager extends CommsManager
{

    public function getHeadText(): string
    {
        return 'Head type Mega' . PHP_EOL;
    }

    public function getFooterText(): string
    {
        return 'Low type Mega' . PHP_EOL;
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new MegaApptEncoder();
    }
}