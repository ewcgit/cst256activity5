<?php
namespace app\Services\Utility;

// Necessary for application functionality.
use Illuminate\Support\Facades\Log;

interface ILogger{
    static function getLogger();       
    
    static function debug();
    
    static function info();
    
    static function warning();
    
    static function error();
}

/* class MyLogger1 implements ILogger{
    function getLogger(){
        return null;
    }
    
    function debug(){
    }
    
    function info(){
        return Log::info("Entering DAO or service.");
    }
    
    function warning(){
        return Log::info("Exiting DAO or service because it is no longer needed.");
    }
    
    function error(){
        return Log::info("Exiting DAO or service due to a failure.");
    }
} */

?>