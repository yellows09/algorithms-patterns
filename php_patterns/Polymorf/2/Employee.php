<?php
include_once "washDishes.php";
abstract class Employee
{
    private static $types = ['cleanUp','washDishes'];
    public static function recruit(string $name, string $whatToDo){
        $class = __NAMESPACE__ . "\\". self::$types[array_search($whatToDo,self::$types)];
        return new $class($name);
    }
    public function __construct(protected string $name)
    {
    }
    abstract public function fire();
}