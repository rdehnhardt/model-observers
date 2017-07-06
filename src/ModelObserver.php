<?php

namespace Rdehnhardt\ModelObserver;

trait ModelObserver
{
    /**
     * Models Observer
     *
     * @var string
     */
    protected static $observer = null;

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
