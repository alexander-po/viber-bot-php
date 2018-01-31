<?php

namespace Viber\Api\Event;

use Viber\Api\Event;
use Viber\Api\User;

/**
 * Triggers when user clicks a subscribe button
 *
 * @author Novikov Bogdan <hcbogdan@gmail.com>
 */
class Subscribed extends Event
{
    /**
     * Viber user
     * @var User
     */
    protected $user;

    /**
     * Get the value of Viber user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}
