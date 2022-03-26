<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoPagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', [AppController::class, 'home']);

/*Route::get('/{locale?}', function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.available_locales'), true)) {
        app()->setLocale($locale);
    }

    return view('layouts.home');
});*/

Route::get('/', function () {
    return view('layouts.home');
});

Route::prefix('{lang?}')->group(function() {

    Route::controller(InfoPagesController::class)->group(function () {
        Route::get('/erotic-massage', 'eroticMassage');
        Route::get('/tantric-massage', 'tantricMassage');
        Route::get('/relaxating-massage', 'relaxatingMassage');
        Route::get('/hawaiian-massage', 'hawaiianMassage');
        Route::get('/royal-massage', 'royalMassage');
        Route::get('/nuru-massage', 'nuruMassage');
        Route::get('/escort-service', 'escortService');
        Route::get('/hotel-service', 'hotelService');
        Route::get('/secret-wish', 'secretWish');
        Route::get('/swingers-massage', 'swingersMassage');
    });
});

/** Czech locale routes */
Route::prefix('cz')->group(function() {

    Route::controller(InfoPagesController::class)->group(function () {
        Route::get('/eroticka-masaz', 'eroticMassage');
        Route::get('/tantra-masaz', 'tantricMassage');
        Route::get('/relaxacni-masaz', 'relaxatingMassage');
        Route::get('/havajska-masaz', 'hawaiianMassage');
        Route::get('/kralovska-masaz', 'royalMassage');
        Route::get('/nuru-masaz', 'nuruMassage');
        Route::get('/eskort-servis', 'escortService');
        Route::get('/hotel-servis', 'hotelService');
        Route::get('/tajna-prani', 'secretWish');
        Route::get('/swingers-masaze', 'swingersMassage');
    });
});

// Language switcher
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->to($locale);
});
