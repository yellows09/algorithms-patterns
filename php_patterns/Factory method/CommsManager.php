<?php

abstract class CommsManager
{
    public abstract function getHeadText() :string;
    public abstract function getFooterText() :string;
    public abstract function getApptEncoder() :ApptEncoder;
}