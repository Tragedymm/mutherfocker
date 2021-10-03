<?php

namespace Tragedy\Mutherfocker\Libs\CN;


class Domain
{
    protected static ?Domain $instance = null;


    public static function getInstance(): Domain
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}