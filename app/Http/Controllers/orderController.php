<?php

namespace App\Http\Controllers;

// Necessary for program functionality.
use Illuminate\Http\Request;
use App\Services\business\SecurityService;
use App\Models\customerModel;
use App\Models\orderModel;

class orderController extends Controller{
    // Uses a request feature as requested.
    public function index(Request $r){
        // Validate the Form Data (note will automatically redirect back to Login View if errors)
        $this->validateForm($r);
        $product=$r->input('product');
        $customerid=$r->input('customerid');
        $securityservice1 = new SecurityService();
        $ordermodel1 = new orderModel($product, $customerid); // Binds firstname and lastname.
        $ordermodel1 = $securityservice1->addOrder($ordermodel1); // Verification for users' passing and failure.
    }
    private function validateForm(Request $request){
        // Setup Data Validation Rules for Login Form
        $rules = ['product' => 'Required | Between:4,10 | Alpha',
            'customerid' => 'Required | Between:0,10'];
        
        // Run Data Validation Rules
        $this->validate($request, $rules);
    }
}