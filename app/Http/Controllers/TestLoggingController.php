<?php

namespace App\Http\Controllers;

// Necessary for program functionality.
use Illuminate\Http\Request;
use Closure;
use App\Services\business\SecurityService;
use App\Models\customerModel;
use App\Services\Utility\ILogger;
use App\Services\Utility\MyLogger1;
use App\Services\Utility\MyLogger3;
use App\Http\Middleware\MyTestMiddleware;

class TestLoggingController extends Controller{
    protected $logger;
    
    function __construct(MyLogger3 $logger){ // A constructor.
        $this->logger = new MyLogger3();
    }
    
    // Uses a request feature as requested.
    public function index(){
        return $this->logger->info();
    }
}