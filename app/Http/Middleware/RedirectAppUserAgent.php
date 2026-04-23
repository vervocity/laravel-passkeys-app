<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectAppUserAgent
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is authenticated and has the specific user agent
        if (auth()->check() && $this->hasKnapheideAppUserAgent($request)) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }

    /**
     * Check if request has the Knapheide Portal App Android user agent
     */
    protected function hasKnapheideAppUserAgent(Request $request): bool
    {
        $userAgent = $request->userAgent() ?? '';
        return str_contains($userAgent, 'Knapheide Portal App Android');
    }
}
