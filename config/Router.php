<?php

require_once __DIR__ . '/RouteSwitch.php';

class Router extends RouteSwitch
{
    public function run(string $requestUri)
    {
        $route = substr($requestUri, 1);

        if ($route === '') {
            $this->home();
        } 
        else {
            $route = substr($route,20,strlen($route));
            $this->$route();
        }
    }
}