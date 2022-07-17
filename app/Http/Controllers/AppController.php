<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * @param Request $request
     * @param $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function language(Request $request, $locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->to($locale);
    }
}
