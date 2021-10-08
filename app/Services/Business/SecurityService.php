<?php

namespace App\Services\Business;

// Necessary for application functionality.
use Illuminate\Support\Facades\Log;
use App\Services\Data\SecurityDAO;
use App\Models\orderModel;
use App\Models\userModel;
use App\Models\customerModel;
use App\Services\Data\CustomerDao;
use App\Services\Data\OrderDao;
use App\Services\Utility\ILogger;
use app\Services\Utility\MyLogger1;
use app\Services\Utility\MyLogger2;

class SecurityService{
    private $verification;
    private $addedCustomer;
    public $ilogger;
    public $ilogger2;
    
    public function login(userModel $verify){ // Logs in user with the correct username and password combination.
        // Important logs.
        $this->ilogger2 = MyLogger2::getLogger();
        $this->ilogger2 = MyLogger2::info();
        Log::info("Entering SecurityService::login()");
        $this->ilogger = MyLogger1::info();
        $this->verification = new SecurityDAO(); // Instantiates object.
        $this->ilogger2 = MyLogger2::info();
        Log::info("Exiting SecurityService::login()");
        $this->ilogger = MyLogger1::info();
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