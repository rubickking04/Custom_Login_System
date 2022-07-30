<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaceBookController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\LoginController;

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

Route::get('/', function () {
    // return abort(500, 'Hello');
    return view('user.login');
});
// Facebook Login URL
Route::prefix('facebook')->name('facebook.')->group(function () {
    Route::get('auth', [FaceBookController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [FaceBookController::class, 'callbackFromFacebook'])->name('callback');
});
Route::controller(App\Http\Controllers\User\LoginController::class)->group(function () {
    Route::get('/auth/login', 'index')->name('login');
    Route::post('/auth/login/store', 'login')->name('login.store');
    Route::post('/auth/logout', 'logout')->name('logout');
});
Route::controller(App\Http\Controllers\User\RegisterController::class)->group(function () {
    Route::get('/auth/register', 'index')->name('user.register');
    Route::post('/auth/register/store', 'store')->name('register.store');
});
Route::middleware('auth')->group(function () {
    Route::controller(App\Http\Controllers\User\HomeController::class)->group(function () {
        Route::get('/auth/home', 'index')->name('user.home');
    });
});
