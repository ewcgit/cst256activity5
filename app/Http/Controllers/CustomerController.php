<?php

namespace App\Http\Controllers;

// Necessary for program functionality.
use Illuminate\Http\Request;
use App\Services\business\SecurityService;
use App\Models\customerModel;

class CustomerController extends Controller{
    // Uses a request feature as requested.
    public function index(Request $r){
        // Validate the Form Data (note will automatically redirect back to Login View if errors)
        $this->validateForm($r);
        $firstname=$r->input('firstname');
        $lastname=$r->input('lastname');
        $securityservice1 = new SecurityService();
        $customermodel1 = new customerModel($firstname, $lastname); // Binds firstname and lastname.
        $customermodel1 = $securityservice1->addCustomer($customermodel1); // Verification for users' passing and failure.
    }
    private function validateForm(Request $request){
        // Setup Data Validation Rules for Login Form
        $rules = ['firstname' => 'Required | Between:4,10 | Alpha',
            'lastname' => 'Required | Between:4,10'];
        
        // Run Data Validation Rules
        $this->validate($request, $rules);
    }
}