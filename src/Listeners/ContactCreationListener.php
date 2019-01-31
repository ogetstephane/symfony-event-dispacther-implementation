<?php

namespace EventDispatcherImplementation\Listeners;

use Symfony\Component\EventDispatcher\Event;

/**
 * Contact creation listener
 *
 * @author Stéphane OGET <ogetstephane@gmail.com>
 */
class ContactCreationListener
{

    public function onContactCreatedEvent(Event $event)
    {

        echo "ContactCreationListener->onContactCreatedEvent : " . var_export($event->getContact()->toArray(), true) . "\n";
        echo "We can log, and do other stuff\n";
    }

}
