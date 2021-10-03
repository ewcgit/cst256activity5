<?php

namespace App\Http\Controllers;

// Necessary for program functionality.
use Illuminate\Http\Request;
use App\Services\business\SecurityService;
use App\Models\UserModel;

class LoginController extends Controller{
    // Uses a request feature as requested.
    public function index(Request $r){
        $username=$r->input('username');
        $password=$r->input('password');
        $securityservice1 = new SecurityService();
        $usermodel1 = new userModel($username, $password); // Binds username and password.
        $usermodel1 = $securityservice1->login($usermodel1); // Verification for users' passing and failure.
        if (!$usermodel1){
            return view('LoginFailed');
        }
        else{
            if ($username == 'mark'){
                return view("LoginPassed2")->with($usermodel1); // Mark login.
            }
            else{
                return view("LoginPassed3")->with($usermodel1); // Other login.
            }
        }
    }
}