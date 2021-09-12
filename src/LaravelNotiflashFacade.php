<?php

namespace Mawuekom\LaravelNotiflash;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\LaravelNotiflash\Skeleton\SkeletonClass
 */
class LaravelNotiflashFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-notiflash';
    }
}
