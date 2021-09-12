<?php

use Mawuekom\Notiflash\Notiflash;

if (! function_exists('notiflash')) {
    /**
     * Create instance of Notiflash
     * 
     * @param string $message
     * @param string $title
     * 
     * @return \Mawuekom\Notiflash\Notiflash
     */
    function notiflash(string $message = null, string $title = null): Notiflash {
        $notiflash = app('notiflash');

        if (! is_null($message)) {
            return $notiflash->success($message, $title);
        }

        return $notiflash;
    }
}

if (! function_exists('alert')) {
    /**
     * Set notiflah alert
     * 
     * @param string $type
     * @param string $message
     * @param string|null $title
     * 
     * @return \Mawuekom\Notiflash\Notiflash
     */
    function alert(string $type, string $message, string $title = null): Notiflash {
        return app('notiflash')->alert($type, $message, $title);
    }
}

if (! function_exists('notiflashCss')) {
    /**
     * @return string
     */
    function notiflashCss(): string {
        return '<link rel="stylesheet" type="text/css" href="'.asset('vendor/notiflash/css/app.css').'"/>';
    }
}

if (! function_exists('notiflashJs')) {
    /**
     * @return string
     */
    function notiflashJs(): string {
        return '<script type="text/javascript" src="'.asset('vendor/notiflash/js/app.js').'"></script>';
    }
}
