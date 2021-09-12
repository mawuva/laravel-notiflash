<?php

namespace Mawuekom\Notiflash;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\Notiflash\Skeleton\SkeletonClass
 */
class NotiflashFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'notiflash';
    }
}
