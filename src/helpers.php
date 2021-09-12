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

if (! function_exists('notiflash_alert')) {
    /**
     * Set notiflah alert
     * 
     * @param string $type
     * @param string $message
     * @param string|null $title
     * 
     * @return \Mawuekom\Notiflash\Notiflash
     */
    function notiflash_alert(string $type, string $message, string $title = null): Notiflash {
        return app('notiflash')->alert($type, $message, $title);
    }
}

if (! function_exists('notiflash_type_class')) {
    /**
     * Get notiflah type's class
     * 
     * @return string
     */
    function notiflash_type_class(): string {
        $type_class = 'is-link';

        if (notiflash_get('type') === 'success') {
            $type_class = 'is-success';
        }

        if (notiflash_get('type') === 'info') {
            $type_class = 'is-info';
        }

        if (notiflash_get('type') === 'warning') {
            $type_class = 'is-warning';
        }

        if (notiflash_get('type') === 'error') {
            $type_class = 'is-error';
        }

        return $type_class;
    }
}

if (! function_exists('notiflash_get')) {
    /**
     * Get instance of Notiflash
     * 
     * @param string $resource
     * @param string $title
     * 
     * @return string
     */
    function notiflash_get(string $resource = null): string {
        return session()->get('notiflash.'.$resource);
    }
}

if (! function_exists('notiflash_has')) {
    /**
     * Get instance of Notiflash
     * 
     * @param string $resource
     * @param string $title
     * 
     * @return string
     */
    function notiflash_has(string $resource = null): string {
        return session()->has('notiflash.'.$resource);
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

if (! function_exists('bulmaToast')) {
    /**
     * @return string
     */
    function bulmaToast(): string {
        return '<script type="text/javascript" src="'.asset('vendor/notiflash/js/bulma-toast.min.js').'"></script>';
    }
}
