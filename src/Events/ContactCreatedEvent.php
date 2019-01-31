<?php

namespace EventDispatcherImplementation\Events;

use Symfony\Component\EventDispatcher\Event;
use EventDispatcherImplementation\Entities\Contact;

/**
 * Contact created event : thrown when a contact is created
 *
 * @author Stéphane OGET <ogetstephane@gmail.com>
 */
class ContactCreatedEvent extends Event
{

    const NAME = 'contact.created';

    /**
     * Created contact entity
     * @var Contact
     */
    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function getContact()
    {
        return $this->contact;
    }

}
