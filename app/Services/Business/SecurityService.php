<?php

namespace App\Services\Business;

// Necessary for application functionality.
use App\Services\Data\SecurityDAO;
use App\Models\orderModel;
use App\Models\userModel;
use App\Models\customerModel;
use App\Services\Data\CustomerDao;
use App\Services\Data\OrderDao;

class SecurityService{
    private $verification;
    private $addedCustomer;
    
    public function login(userModel $verify){ // Logs in user with the correct username and password combination.
        $this->verification = new SecurityDAO(); // Instantiates object.
        return $this->verification->findByUser($verify); // Finds the correct user.
    }
    
    public function addCustomer(customerModel $customer){
        $this->addedCustomer = new CustomerDao();
        return $this->addedCustomer->addCustomer($customer);
    }
    
    public function addOrder(orderModel $order){
        $this->addedOrder = new OrderDao();
        return $this->addedOrder->addOrder($order);
    }
}
?>