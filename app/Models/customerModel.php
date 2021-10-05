<?php

namespace App\Models;

class customerModel{
    
    // Private variables created as previously instructed.
    private $firstname;
    private $lastname;
    
    function __construct($firstname, $lastname){ // firstname and lastname constructor.
        $this->firstname=$firstname;
        $this->lastname=$lastname;
    }
    
    // Auto-generated getters and setters are now all below.
    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
}