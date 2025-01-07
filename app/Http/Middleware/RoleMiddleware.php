<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        $payload = $request->payload;
        if (!is_null($payload)) {
            if ($payload['role'] != $role) {
                if($payload['role'] != 'company'){
                    return redirect()->route('admin.dashboard');
                } else {
                    return redirect()->route('company.dashboard');
                }
            }
        }

        return $next($request);
    }
}
