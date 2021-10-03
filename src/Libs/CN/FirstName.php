<?php

namespace Tragedy\Mutherfocker\Libs\CN;


class FirstName
{
    protected static ?FirstName $instance = null;


    public static function getInstance(): FirstName
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}