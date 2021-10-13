<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\Utility\ILogger;
use App\Services\Utility\MyLogger1;

class MyTestMiddleware{
    public $ilogger1;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        $this->ilogger1 = new MyLogger1;
        $this->ilogger1->info2();
        $path = $request->path();
        MyLogger1::info3();
        $secureCheck = true;
        if ($request->is('/') || $request->is('login3') || $request->is('dologin3') ||
            $request->is('usersrest') || $request->is('usersrest/*') ||
            $request->is('loggingservice'))
        { $secureCheck = false;}
        MyLogger1::info4();
        if($secureCheck){
            MyLogger1::info5();
            return redirect('/login3');
        }
        return $next($request);
    }
}