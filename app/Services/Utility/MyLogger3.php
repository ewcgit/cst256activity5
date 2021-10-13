<?php
namespace app\Services\Utility;

// Necessary for application functionality.
use App\Services\Utility\ILogger;
use App\Services\Utility\ILoggerService;
use Illuminate\Support\Facades\Log;

class MyLogger3 implements ILoggerService{        
        function debug(){
        }
        
        function info(){
            return Log::info("TestLoggingController called.");
        }
        
        function info2(){
            return Log::info("The middleware handle has been called.");
        }
        
        function info3(){
            return Log::info("Entering My Security Middleware in handle() at path.");
        }
        
        function info4(){
            return Log::info("Security Middleware in handle().....Needs Security Security Middleware in handle().....No Security Required");
        }
        
        function info5(){
            return Log::info("Leaving My Security Middleware in handle() doing a redirect back to login");
        }
        
        function warning(){
            return Log::info("Exiting DAO or service because it is no longer needed.");
        }
        
        function error(){
            return Log::info("Exiting DAO or service due to a failure.");
        }
}

?>