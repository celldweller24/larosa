<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoPagesController;
use App\Http\Controllers\TypePagesController;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Session;

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

Route::group(['middleware' => 'local', 'prefix' => '{lang?}'], function () {

    /*Route::get('/', function () {
        return view('layouts.home');
    });*/

    Route::controller(InfoPagesController::class)->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('erotic-massage', 'eroticMassage');
        Route::get('tantric-massage', 'tantricMassage');
        Route::get('relaxating-massage', 'relaxatingMassage');
        Route::get('hawaiian-massage', 'hawaiianMassage');
        Route::get('royal-massage', 'royalMassage');
        Route::get('nuru-massage', 'nuruMassage');
        Route::get('escort-service', 'escortService');
        Route::get('hotel-service', 'hotelService');
        Route::get('secret-wish', 'secretWish');
        Route::get('swingers-massage', 'swingersMassage');
    });

    Route::name('types')->controller(TypePagesController::class)->group(function () {
        Route::get('for-men', 'forMen');
        Route::get('for-women', 'forWomen');
        Route::get('for-couples', 'forCouples');
        Route::get('for-gays', 'forGays');
    });

    Route::get('pricing', function () {
        return view('pages.pricing');
    });

    Route::get('photogallery', function () {
        return view('pages.photogallery');
    });

    Route::get('contact', function () {
        return view('pages.contact');
    });

    // Language switcher
    Route::get('language/{locale}', [AppController::class, 'language']);



});
/*Route::prefix('{lang?}')
    ->middleware('local')
    ->group(function () {
        Route::get('/', function () {
            return view('layouts.home');
        });

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
});*/

/*
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->to($locale);
});*/


Route::get('language/{locale}', [AppController::class, 'language']);
