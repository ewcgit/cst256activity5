<?php
namespace app\Services\Utility;

// Necessary for application functionality.
use App\Services\Utility\ILogger;
use Illuminate\Support\Facades\Log;

class MyLogger1 implements ILogger{
        static function getLogger(){
            return null;
        }
        
        static function debug(){
        }
        
        static function info(){
            return Log::info("Entering DAO or service.");
        }
        
        static function info2(){
            return Log::info("The middleware handle has been called.");
        }
        
        static function info3(){
            return Log::info("Entering My Security Middleware in handle() at path.");
        }
        
        static function info4(){
            return Log::info("Security Middleware in handle().....Needs Security Security Middleware in handle().....No Security Required");
        }
        
        static function info5(){
            return Log::info("Leaving My Security Middleware in handle() doing a redirect back to login");
        }
        
        static function warning(){
            return Log::info("Exiting DAO or service because it is no longer needed.");
        }
        
        static function error(){
            return Log::info("Exiting DAO or service due to a failure.");
        }
}
?>