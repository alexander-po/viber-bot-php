<?php

namespace Viber\Api\Event;

use Viber\Api\Event;
use Viber\Api\Sender;
use Viber\Api\Message as MessageEntity;

/**
 * Triggers when user send message
 *
 * @author Novikov Bogdan <hcbogdan@gmail.com>
 */
class Message extends Event
{
    /**
     * Who send message
     *
     * @var Sender
     */
    protected $sender;

    /**
     * Message data
     *
     * @var MessageEntity
     */
    protected $message;

    /**
     * Get the value of Who send message
     *
     * @return Sender
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Get the value of Message data
     *
     * @return MessageEntity
     */
    public function getMessage()
    {
        return $this->message;
    }
}
