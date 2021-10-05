<?php

namespace App\Services\Business;

// Necessary for application functionality.
use App\Services\Data\SecurityDAO;
use App\Models\orderModel;
use App\Models\userModel;
use App\Models\customerModel;
use App\Services\Data\CustomerDao;
use App\Services\Data\OrderDao;
use App\Services\Business\SecurityService;
use mysqli;

class OrderService{
    private $verification;
    private $addedCustomer;
    public function createOrder($firstname, $lastname, $product){
        mysqli::autocommit(FALSE);
        mysqli::begin_transaction();
        $CD = new CustomerDao();
        $CD->addCustomer();
        $OD = new OrderDao();
        $OD->addOrder();
        mysqli::commit();
    }
}
?>