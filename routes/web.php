<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth']], function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/logout', function () {
            Auth::guard('agency')->logout();
            Auth::guard('admin')->logout();
            Auth::guard('branch_employee')->logout();
            Auth::logout();
            return redirect('/login');
        })->name('home');


        Route::get('/lang/{lang}', function ($lang) {
            App::setlocale($lang);
            app()->setLocale($lang);
            session(['locale' => $lang]);
            $segments = str_replace(url('/'), '', url()->previous());
            $segments = array_filter(explode('/', $segments));
            array_shift($segments);
            array_unshift($segments, $lang);
            return redirect()->to(implode('/', $segments));
        })->name('home');


        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


        Route::group(['prefix' => 'mails'], function () {
            Route::get('create', [\App\Http\Controllers\MailController::class, 'create']);

        });





    });
});


