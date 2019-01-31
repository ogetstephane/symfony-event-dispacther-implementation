<?php
// basic_example.php
 
 require_once './vendor/autoload.php';
 use Symfony\Component\EventDispatcher\EventDispatcher;
 use EventDispatcherImplementation\Events\ContactCreatedEvent;
 use EventDispatcherImplementation\Entities\Contact;
 use EventDispatcherImplementation\Listeners\ContactCreationListener;

 // event dispatcher instanciation
 $dispatcher = new EventDispatcher();
  
 // register ContactCreationListener listener for the 'contact.created' event
 $listener = new ContactCreationListener();
 $dispatcher->addListener('contact.created', array($listener, 'onContactCreatedEvent'));

$firstContact=new Contact();
$firstContact->setFirstname("Jean");
$firstContact->setLastname("Dupré");

//Dispatch Event 'contact.created'
$dispatcher->dispatch(ContactCreatedEvent::NAME, new ContactCreatedEvent($firstContact));
