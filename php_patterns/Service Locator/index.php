<?php
// simple serviceLocator
class ServiceLocator
{
    private $services = [];

    public function add($serviceName, $service)
    {
        $this->services[$serviceName] = $service;
    }

    public function has($serviceName)
    {
        return isset($this->services[$serviceName]);
    }

    public function get($serviceName)
    {
        return $this->services[$serviceName];
    }
}

class App
{
    public static $locator;

}

App::$locator = new ServiceLocator;
App::$locator->add('name', 'Sergey');
echo App::$locator->get('name');