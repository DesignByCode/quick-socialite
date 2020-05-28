<?php

namespace DesignByCode\QuickSocialite\Http\Middleware;

use Closure;

class Social
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

        if (!config("social.services.{$request->service}.use")) {
            return redirect()->back();
        }
        return $next($request);
    }
}
