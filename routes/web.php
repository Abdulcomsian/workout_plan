<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\{
                HomeController,
                WorkoutController,
                StripeController,
                UserController,
                DashboardController
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
    Route::post('regenerate-single-workout' , [WorkoutController::class , 'regenerateSingleWorkout'])->name('regenerateSingleWorkout');
    Route::post('regenerate-all-workout' , [WorkoutController::class , 'regenerateAllWorkout'])->name('regenerateAllWorkout');
    Route::post('update-workout' , [WorkoutController::class ,'updateWorkout'])->name('updateWorkout');
    Route::post('update-plan-workout' , [WorkoutController::class ,'updatePlanWorkout'])->name('updatePlanWorkout');
    Route::get('plan-detail/{id}' , [WorkoutController::class , 'planDetail']);
    Route::get('subscription', [StripeController::class, 'getSubscriptionPage'])->name('subscription');
    Route::post('add-subscription' , [StripeController::class , 'addSubscription'])->name('addSubscription');
    Route::post('cancel-subscription' , [StripeController::class , 'cancelSubscription'])->name('cancelSubscription');
    Route::post('activate-subscription' , [StripeController::class , 'activateSubscription'])->name('activateSubscription');
    Route::get('payment/{id}', [StripeController::class, 'getPaymentPage'])->name('payment');
    Route::get('profile', [HomeController::class, 'profile'])->name('profile');
    Route::post('update-username' , [UserController::class , 'updateUsername'])->name('updateUsername');
    Route::post('update-password' , [UserController::class , 'updatePassword'])->name('updatePassword');
    Route::post('update-phone' , [UserController::class , 'updatePhone'])->name('updatePhone');
    Route::get('test-twillio' , [WorkoutController::class ,'test']);
    Route::get('logout' , [UserController::class , 'logout'])->name('logout');
    Route::get('test-workout-cron' , [WorkoutController::class , 'testCron']);

    Route::middleware('authenticate.admin')->group(function(){
        Route::get('dashboard' , [DashboardController::class , 'getDashboard'])->name('dashboard');
        Route::get('subscribers' , [DashboardController::class , 'subscribers'])->name('subscribers');
        Route::post('subscriber-list' , [DashboardController::class , 'getSubscribers'])->name('getSubscribers');
    });
});




