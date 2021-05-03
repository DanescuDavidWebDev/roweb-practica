<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

//forgot password
Route::get('/forgot_password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'show_forgot']);

Route::post('/forgot_password_send', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submit_forgot']);

//change password
Route::get('/change_password/{token}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'change_password']);

Route::post('/change_password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'change_password_submit']);


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
