<?php

class save
{
    public $data;
    public static $instance;

    public function __construct()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new save();
        }
        return self::$instance;
    }

    public function setData(string $value)
    {
        $this->data = $value;
    }
}

class A
{
    public static function tryW()
    {
        $t = save::getInstance();
        $t->setData('part');
    }
}

class B
{
    public static function tryGet()
    {
        $get = save::getInstance();
        var_dump($get);
    }
}
A::tryW();
$test = new B();
$test::tryGet();
