<?php

class Home extends Controller
{
    public function index(string $name = '')
    {
        echo $name;
    }
}