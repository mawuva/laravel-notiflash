<?php

namespace Mawuekom\Notiflash\Storage;

use Illuminate\Session\Store;

class Session
{
    /**
     * Session storage.
     *
     * @var \Illuminate\Session\Store
     */
    protected Store $session;

    /**
     * Undocumented function
     *
     * @param \Illuminate\Session\Store $session
     * 
     * @return void
     */
    public function __construct(Store $session)
    {
        $this ->session = $session;
    }

    /**
     * Set a session key and value.
     *
     * @param  string  $key
     * @param  array  $data
     * 
     * @return void
     */
    public function flash(string $key, array $data = [])
    {
        $this->session->flash($key, $data);
    }
}
