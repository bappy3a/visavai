<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CacheStaticAssets
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only apply to GET requests
        if ($request->isMethod('GET')) {
            $path = $request->path();

            // Cache static assets for 1 year
            if (preg_match('/\.(css|js|jpg|jpeg|png|gif|ico|svg|woff|woff2|ttf|eot|webp)$/i', $path)) {
                $response->headers->set('Cache-Control', 'public, max-age=31536000, immutable');
                $response->headers->set('Expires', gmdate('D, d M Y H:i:s', time() + 31536000).' GMT');
            }
            // Cache HTML for 1 hour
            elseif (preg_match('/\.(html|htm)$/i', $path) || ! str_contains($path, '.')) {
                $response->headers->set('Cache-Control', 'public, max-age=3600');
            }
        }

        return $response;
    }
}
