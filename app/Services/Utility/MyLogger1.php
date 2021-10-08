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
        
        static function warning(){
            return Log::info("Exiting DAO or service because it is no longer needed.");
        }
        
        static function error(){
            return Log::info("Exiting DAO or service due to a failure.");
        }
}
?>