<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use App\Models\UserLog;
use Jenssegers\Agent\Agent;

class LogUsersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $agent = new Agent();
        $UserLog = UserLog::create([
            'platform' => $agent->platform(),
            'device' => $agent->device(),
            'browser' => $agent->browser(),
        ]);

        return $next($request);
    }
}
