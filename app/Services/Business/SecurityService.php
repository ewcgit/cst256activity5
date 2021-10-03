<?php

namespace App\Services\Business;

// Necessary for application functionality.
use App\Services\Data\SecurityDAO;
use App\Models\userModel;

class SecurityService{
    private $verification;
    public function login(userModel $verify){ // Logs in user with the correct username and password combination.
        $this->verification = new SecurityDAO(); // Instantiates object.
        return $this->verification->findByUser($verify); // Finds the correct user.
    }
}
?>