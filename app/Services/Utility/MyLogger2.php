<?php
namespace app\Services\Utility;

// Necessary for application functionality.
use App\Services\Utility\ILogger;
use Illuminate\Support\Facades\Log;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;
use Monolog\Formatter\LineFormatter;

class MyLogger2 implements ILogger{
        static function getLogger(){
            // Default date format changed.
            $date = "Y n j, g:i a";
            $outputformat = "%datetime% > %level_name% > %message% %context% %extra%\n";
            
            // Formatter created.
            $formatter = new LineFormatter($outputformat, $date);
            
            // Handler created.
            $stream = new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG);
            $stream->setFormatter($formatter);
            
            // Creates Logger.
            $logger = new Logger('my_logger');

            // File stream. 
            $logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG));
            $logger->pushHandler(new FirePHPHandler());
            
            return $logger->info('Monolog prepared!'); // Printed message.
        }
        
        static function debug(){
        }
        
        static function info(){
            // Default date format changed.
            $date = "Y n j, g:i a";
            $outputformat = "%datetime% > %level_name% > %message% %context% %extra%\n";
            
            // Formatter created.
            $formatter = new LineFormatter($outputformat, $date);
            
            // Handler created.
            $stream = new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG);
            $stream->setFormatter($formatter);
            
            // Creates Logger.
            $logger = new Logger('my_logger');
            
            // File stream.
            $logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG));
            $logger->pushHandler(new FirePHPHandler());
            
            return $logger->info('Entering DAO or service.'); // Printed message.
        }
        
        static function warning(){
            // Default date format changed.
            $date = "Y n j, g:i a";
            $outputformat = "%datetime% > %level_name% > %message% %context% %extra%\n";
            
            // Formatter created.
            $formatter = new LineFormatter($outputformat, $date);
            
            // Handler created.
            $stream = new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG);
            $stream->setFormatter($formatter);
            
            // Creates Logger.
            $logger = new Logger('my_logger');
            
            // File stream.
            $logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG));
            $logger->pushHandler(new FirePHPHandler());
            
            return $logger->info('Exiting DAO or service because it is no longer needed.'); // Printed message.
        }
        
        static function error(){
            // Default date format changed.
            $date = "Y n j, g:i a";
            $outputformat = "%datetime% > %level_name% > %message% %context% %extra%\n";
            
            // Formatter created.
            $formatter = new LineFormatter($outputformat, $date);
            
            // Handler created.
            $stream = new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG);
            $stream->setFormatter($formatter);
            
            // Creates Logger.
            $logger = new Logger('my_logger');
            
            // File stream.
            $logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG));
            $logger->pushHandler(new FirePHPHandler());
            
            return $logger->info('Exiting DAO or service due to a failure.'); // Printed message.
        }
}
?>