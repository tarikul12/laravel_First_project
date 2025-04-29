<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "Hello from middleware<br>";

        if ($request->country!='Bnangladesh') {
            echo "You are not allowed to view this content.";
        }
        // if ($request -> country<18) {
        //     echo "You are not old enough to view this content.";
        // }
        return $next($request);
    }
}
