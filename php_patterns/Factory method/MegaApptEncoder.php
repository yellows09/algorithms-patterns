<?php
include_once 'ApptEncoder.php';
class MegaApptEncoder extends ApptEncoder
{

    public function encode(): string
    {
        return 'encode from Mega' . PHP_EOL;
    }
}