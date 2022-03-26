<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }

        /*$segment = $request->segment(1);

        if (!in_array($segment, config('app.available_locales'), true)) {
            $segments = $request->segments();
            $fallback = session('locale') ?: config('app.fallback_locale');
            $segments = array_merge($segments, (array) $fallback);

            return redirect()->to(implode('/', $segments));
        }*/

        return $next($request);
    }
}
