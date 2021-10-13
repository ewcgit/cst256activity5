<?php

namespace App\Models;

use JsonSerializable;

class usertableModel implements JsonSerializable {
    private $id; // User ID.
    private $firstName; // The user's first name.
    private $lastName; // The user's last name.
    
    function __construct($id, $firstName, $lastName) { // A constructor.
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    
    // Auto-generated getters and setters.
    /**
     * @return mixed
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName(){
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName(){
        return $this->lastName;
    }

    /**
     * @param mixed $id
     */
    public function setId($id){
        $this->id = $id;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    
    public function jsonSerialize() {
        return get_object_vars($this);
        // Don't delete:
        // return (object) get_object_vars($this);
    }
}