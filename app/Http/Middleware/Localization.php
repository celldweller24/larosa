<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;

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

        $segments = $request->segments();

        $langCodeSegment = (Session::get('locale') === config('app.fallback_locale'))
            ? config('app.fallback_locale')
            : $request->segment(1);

        if (!in_array($langCodeSegment, config('app.available_locales'), true)) {

            $fallback = session('locale') ?: config('app.fallback_locale');
            $segments = array_merge((array) $fallback, $segments);
            return redirect()->to(implode('/', $segments));
        } else {
            if ($langCodeSegment !== Session::get('locale')) {
                App::setLocale($langCodeSegment);
                Session::put('locale', $langCodeSegment);
            }
        }

        // Temporary solution for case when URL contains not only lang code
        if (in_array('language', $request->segments(), true)
            && in_array($request->segment(3), config('app.available_locales'), true)
        ) {
            App::setLocale($request->segment(3));
            Session::put('locale', $request->segment(3));

            return redirect()->to($request->segment(3));
        }

        return $next($request);
    }
}
