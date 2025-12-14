<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Symfony\Component\HttpFoundation\Response;

class SuspendHosting
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $codeDate = config('hosting.code_date');

        if ($codeDate !== null) {
            $suspendDate = Date::parse($codeDate);
            $currentDate = Date::now();

            if ($currentDate->greaterThanOrEqualTo($suspendDate)) {
                return response()->view('errors.503', [], 503);
            }
        }

        return $next($request);
    }
}
