<?php

use App\Http\Controllers\AAdmin\LoginController as AAdminLoginController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\LanguageController;
use App\Http\Middleware\AdminAuth;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.home');
});
Route::get('/dashboard_laravel', function () {
    return view('dashboard');
});

Route::middleware(['check_user'])->group(function () {

    Route::get('/dashboard', function () {
        return view('layouts.admin');
    })->name('dashboard');

    Route::prefix('languages')->group(function () {
        Route::get('lang', [LanguageController::class, 'getLang'])->name('admin.lang');
    });
});
