<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoPagesController;
use App\Http\Controllers\TypePagesController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GeneralPagesController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix' => 'employee'], function () {
    Route::controller(EmployeeController::class)->group(function () {
        Route::get('edit', 'edit')->name('employeeEdit');
        Route::post('update/{id}', 'update')->name('employeeUpdate');
        Route::get('add', 'create')->name('employeeAdd');
        Route::post('create', 'store')->name('employeeCreate');
        Route::get('delete/{id}', 'destroy')->name('employeeDelete');
        Route::get('delete-photo', 'deletePhoto')->name('deletePhoto');
    });
});

/* Admin routes */
Route::controller(AdminController::class)->group(function () {
    Route::get('dashboard', 'index')->name('dashboard');
    Route::get('admin', 'index')->name('dashboard');

    Route::get('admin/employee-sort', 'employeeSort')->name('employeeSort');
});

/* Page routes */
/*Route::group(['middleware' => 'local', 'prefix' => '{lang?}'], function () {

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

    // Authentication
    Auth::routes();

    // Admin panel
    Route::resource('dashboard', EmployeeController::class);

});*/


/*****************/

/* Page routes */
$optionalLanguageRoutes = function() {

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

    Route::controller(GeneralPagesController::class)->group(function () {
        Route::get('pricing', 'pricing');
        Route::get('photogallery', 'photoGallery');
        Route::get('contact', 'contact');
        Route::get('contact', function () {
            return view('pages.contact');
        });
    });

    // Language switcher
    Route::get('language/{locale}', [AppController::class, 'language']);

    // Authentication
    Auth::routes();

    // Admin panel
    //Route::resource('dashboard', EmployeeController::class);
};

Route::group(['middleware' => 'local'], $optionalLanguageRoutes);
Route::group(['middleware' => 'local', 'prefix' => '{lang?}'], $optionalLanguageRoutes);


