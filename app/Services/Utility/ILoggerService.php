<?php
namespace app\Services\Utility;

// Necessary for application functionality.
use Illuminate\Support\Facades\Log;

interface ILoggerService{
    function debug();
    
    function info();
    
    function warning();
    
    function error();
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