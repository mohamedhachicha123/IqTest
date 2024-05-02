<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PreventAuthenticatedAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // app/Http/Middleware/PreventAuthenticatedAccessMiddleware.php

    public function handle($request, Closure $next)
    {
        if (auth()->guard('admin')->check() || auth()->guard('user')->check()) {
            return redirect('/dashboard'); // Redirect to the dashboard or any other page
        }

        return $next($request);
    }

}
