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

Route::get('/', function () {
    return view('welcome');
});

// Added by Roland for adding Fortify auth
// Uncomment 'verified' middleware and Features::emailVerification() in config/Fortify.php if we want to enable email verification checking
// https://dev.to/jasminetracey/laravel-8-with-bootstrap-livewire-and-fortify-5d33
Route::middleware(['auth', /* 'verified' */ ])->group(function () {
    Route::view('home', 'home')->name('home');
});
// end setting basic auth

Route::prefix('hss')->group(function() {
    Route::get('/meal', [App\Http\Controllers\HSS\MealController::class, 'index'])->name('hss.meal.index');
    Route::get('/meal/create', [App\Http\Controllers\HSS\MealController::class, 'create'])->name('hss.meal.create');
    Route::get('/meal/edit', [App\Http\Controllers\HSS\MealController::class, 'edit'])->name('hss.meal.edit');
    Route::get('/meal/delivery', [App\Http\Controllers\HSS\MealController::class, 'mealDelivery'])->name('hss.meal.delivery');
    Route::get('/meal/delivery/print', [App\Http\Controllers\HSS\MealController::class, 'printMealDelivery'])->name('hss.meal.delivery.print');

    Route::get('/care_worker', [App\Http\Controllers\HSS\CareWorkerController::class, 'index'])->name('hss.care_worker.index');
    Route::get('/care_worker/edit/{id}', [App\Http\Controllers\HSS\CareWorkerController::class, 'edit'])->name('hss.care_worker.edit');
});
