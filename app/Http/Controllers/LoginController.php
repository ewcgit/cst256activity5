<?php

namespace App\Http\Controllers;

// Necessary for program functionality.
use App\Models\userModel;
use App\Services\Business\SecurityService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Services\Utility\ILogger;
use App\Services\Utility\MyLogger1;
use App\Services\Utility\MyLogger2;

class LoginController extends Controller{
    public $ilogger;
    public $ilogger2;
    
    // Uses a request feature as requested.
    public function index(Request $r){
        $this->ilogger2 = MyLogger2::getLogger();
        Log::info("Entering LoginController::index()"); // Call log.
        $this->ilogger = MyLogger1::info();
        // Validate the Form Data (note will automatically redirect back to Login View if errors)
        $this->validateForm($r);
        $username=$r->input('username');
        $password=$r->input('password');
        $this->ilogger2 = MyLogger2::info();
        Log::info("Parameters are: " , array("username" => $username , "password" => $password)); // Reads parameters.
        $this->ilogger = MyLogger1::info();
        $securityservice1 = new SecurityService();
        $usermodel1 = new userModel($username, $password); // Binds username and password.
        $usermodel1 = $securityservice1->login($usermodel1); // Verification for users' passing and failure.
        if (!$usermodel1){
            $this->ilogger2 = MyLogger2::error();
            Log::info("Exit LoginController::index() with login failing");
            $this->ilogger = MyLogger1::error();
            return view('LoginFailed');
        }
        else{
            if ($username == 'mark'){
                $this->ilogger2 = MyLogger2::warning();
                Log::info("Exit LoginController::index() with login passing");
                $this->ilogger = MyLogger1::warning();
                return view("LoginPassed2")->with($usermodel1); // Mark login.
            }
            else{
                $this->ilogger2 = MyLogger2::warning();
                Log::info("Exit LoginController::index() with login passing");
                $this->ilogger = MyLogger1::warning();
                return view("LoginPassed3")->with($usermodel1); // Other login.
            }
        }
    }
    private function validateForm(Request $request){
        // Setup Data Validation Rules for Login Form
        $rules = ['username' => 'Required | Between:4,10 | Alpha',
            'password' => 'Required | Between:4,10'];
        
        // Run Data Validation Rules
        $this->validate($request, $rules);
    }
}