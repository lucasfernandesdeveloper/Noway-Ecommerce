<?php

abstract class RouteSwitch
{
    protected function home()
    {
        require __DIR__ . '/app/views/home/index.html';
    }

    protected function about()
    {
        require __DIR__ . '/app/views/home/index.html';
    }

    protected function contact()
    {
        require __DIR__ . '/app/views/home/index.html';
    }
    
    public function __call($name, $arguments)
    {
        http_response_code(404);
        require __DIR__ . '/app/views/home/index.html';
    }
}