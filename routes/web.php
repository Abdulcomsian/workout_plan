<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\{
    HomeController,
    WorkoutController,
    StripeController
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

Auth::routes();







Route::group(['middleware' => ['prevent.back.header' , 'verfiy.authentication']] , function(){
    
    Route::get('/', [HomeController::class , 'index'] );
    Route::get('home', [HomeController::class, 'index'])->name('index');
    Route::get('generate', [HomeController::class, 'generate'])->name('generate');
    Route::post('create-setup-intent' , [StripeController::class , 'createSetupIntent'])->name('createSetupIntent');
    Route::post('add-workout' , [WorkoutController::class , 'createWorkoutPlan'])->name('addWorkout');
    // Route::get('login', [HomeController::class, 'login'])->name('login');
    // Route::get('signup', [HomeController::class, 'signup'])->name('signup');
    Route::get('payment', [HomeController::class, 'payment'])->name('payment');
    Route::get('subscription', [StripeController::class, 'getSubscriptionPage'])->name('subscription');
    Route::post('add-subscription' , [StripeController::class , 'addSubscription'])->name('addSubscription');
    Route::get('payment', [StripeController::class, 'getPaymentPage'])->name('payment');
    Route::get('profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('test-twillio' , [WorkoutController::class ,'test']);
    Route::get('test-workout-cron' , [WorkoutController::class , 'testCron']);
});




