<?php

namespace DesignPatterns\Structural\Decorator\Php\Classes;

use DesignPatterns\Structural\Decorator\Php\Classes\Log;

class Logger
{

    protected static $_logs = [];

    public static function addLog(Log $log)
    {
        self::$_logs[] = $log;
    }

    public static function getLast()
    {
        return (count(self::$_logs) > 0) ? array_pop(self::$_logs) : null;
    }

}
