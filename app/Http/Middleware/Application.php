<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Http;


class Application
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!isset($_COOKIE['auth_token'])) {
            return redirect()->route('auth.login');
        }

        $getMe = Http::acceptJson()
        ->withHeaders([
            'Authorization' => 'Bearer '.$_COOKIE['auth_token']
        ])->get((string) env('SERVICE_BASE_URL').'/auth/me')
        ->json();

        if($getMe['status_code'] == 200){
            $request->user = $getMe['data']['user'];
            $request->payload = $getMe['data']['payload'];
        }

        if ($request->is('/')) {
            $payload = $request->payload;
            if($payload['role'] == 'internal'){
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('company.dashboard');
            }
        }

        return $next($request);
    }
}
