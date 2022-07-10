<?php

class Preferences
{
    private array $props;
    private static Preferences $instance;

    private function __construct()
    {
    }

    public static function getInstance(): Preferences
    {
        if (empty(self::$preference)) {
            self::$instance = new Preferences();
        }
        return self::$instance;
    }

    public function setProperty(string $key, string $value)
    {
        $this->props[$key] = $value;
    }

    public function getProperty(string $key)
    {
        return $this->props[$key];
    }
}