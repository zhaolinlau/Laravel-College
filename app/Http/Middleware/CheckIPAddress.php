<?php

namespace App\Http\Middleware;

use Closure;

class CheckIPAddress
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  array  $allowedIps
     * @return mixed
     */
    public function handle($request, Closure $next, $allowedIps)
    {
        $allowedIps = explode(',', $allowedIps);
        $userIp = $request->ip();

        if (!in_array($userIp, $allowedIps)) {
            return response()->json(['error' => 'Access Denied'], 403);
        }

        return $next($request);
    }
}
