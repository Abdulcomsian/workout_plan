<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\{
    HomeController
};

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
    return view('index');
});








Route::get('index', [HomeController::class, 'index'])->name('index');
Route::get('generate', [HomeController::class, 'generate'])->name('generate');
Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('signup', [HomeController::class, 'signup'])->name('signup');
Route::get('payment', [HomeController::class, 'payment'])->name('payment');
Route::get('subscription', [HomeController::class, 'subscription'])->name('subscription');
Route::get('profile', [HomeController::class, 'profile'])->name('profile');

