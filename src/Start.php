<?php


namespace HelloWorld;


class Start
{
    public function __construct()
    {

    }

    public function run()
    {
        echo 'hello world for composer!';
        return __METHOD__;
    }

    public function run2()
    {
        return 'run2';
    }
}