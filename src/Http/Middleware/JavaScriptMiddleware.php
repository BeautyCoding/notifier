<?php

namespace BeautyCoding\Notifier\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class JavaScriptMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \JavaScript::put([
            'error' => Session::pull('notifier.error'),
            'info' => Session::pull('notifier.info'),
            'success' => Session::pull('notifier.success'),
            'warning' => Session::pull('notifier.warning'),
        ]);

        return $next($request);
    }
}
