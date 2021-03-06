<?php

namespace Tragedy\Mutherfocker\Libs\CN;


class City
{
    protected static ?City $instance = null;


    public static function getInstance(): City
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}