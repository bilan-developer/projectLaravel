<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class HistoryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        Cache::put($user->getKey(), [
            'user' => $user,
            'ip' =>  $request->ip(),
            'time' => date('Y-m-d H:i:s')
        ], 30);

        return $next($request);

    }
}
