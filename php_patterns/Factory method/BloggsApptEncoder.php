<?php
include_once 'ApptEncoder.php';

class BloggsApptEncoder extends ApptEncoder
{

    public function encode(): string
    {
        return 'Encode Bloggs' . PHP_EOL;
    }
}