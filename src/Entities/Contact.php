<?php

namespace EventDispatcherImplementation\Entities;
/**
 * Contact entity
 *
 * @author Stéphane OGET <ogetstephane@gmail.com>
 */
class Contact
{

    /**
     * Contact firstname
     * @var string
     */
    private $firstname;

    /**
     * Contact lastname
     * @var string
     */
    private $lastname;

    /**
     * get contact firstname
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * set contact firstname
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * get contact lastname
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * set contact lastname
     * @param string $lastName
     * @return $this
     */
    public function setLastname($lastName)
    {
        $this->lastname = $lastName;
        return $this;
    }

    /**
     * contact array representation
     * @return array
     */
    public function toArray()
    {
        return [
            'firstname' => $this->getFirstname(),
            'lastname' => $this->getLastname()
        ];
    }

}
