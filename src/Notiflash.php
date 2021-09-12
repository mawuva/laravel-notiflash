<?php

namespace Mawuekom\Notiflash;

use Mawuekom\Notiflash\Storage\Session;

class Notiflash
{
    /**
     * @var \Mawuekom\Notiflash\Storage\Session
     */
    protected Session $session;

    /**
     * Create a new notiflash instance.
     *
     * @param  \Mawuekom\Notiflash\Storage\Session  $session
     * 
     * @return void
     */
    public function __construct(Session $session)
    {
        $this ->session = $session;
    }

    /**
     * Flash a success message.
     *
     * @param  string  $message
     * @param  string|null  $title
     * @return $this
     */
    public function success(string $message, string $title = null): self
    {
        $this->flash($message, 'success', 'flaticon2-check-mark', 'toast', $title);

        return $this;
    }

    /**
     * Return an alert notiflash.
     *
     * @param  string  $type
     * @param  string  $message
     * @return $this
     */
    public function alert(string $type, string $message, string $title = null): self
    {
        $this->flash($message, $type, null, 'alert', $title);

        return $this;
    }

    /**
     * Flash a message.
     *
     * @param  string  $message
     * @param  string|null  $type
     * @param  string|null  $icon
     * @param  string|null  $model
     * @param  string|null  $title
     *
     * @return void
     */
    public function flash(string $message, $type = null, $icon = null, string $model = null, string $title = null): void
    {
        $notifications = [
            'message' => $message,
            'type'    => $type,
            'icon'    => $icon,
            'model'   => $model,
            'title'   => $title,
        ];

        $this ->session ->flash('notiflash', $notifications);
    }

    /**
     * Get the stored message.
     *
     * @return string
     */
    public function message(): string
    {
        return $this->session->get('notiflash.message');
    }

    /**
     * Get the stored type.
     *
     * @return string
     */
    public function type(): string
    {
        return $this->session->get('notiflash.type');
    }

    /**
     * Get the stored title.
     *
     * @return string
     */
    public function title(): string
    {
        return $this->session->get('notiflash.title');
    }
}
