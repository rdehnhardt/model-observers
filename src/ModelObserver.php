<?php

namespace Rdehnhardt\ModelObserver;

trait ModelObserver
{
    /**
     * Boot model observer
     */
    public static function bootModelObserver()
    {
        if (self::$observer && class_exists(self::$observer)) {
            static::observe(self::$observer);
        }
    }
}
