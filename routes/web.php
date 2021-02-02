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
    Route::get('/delivery_route', [App\Http\Controllers\HSS\DeliveryRouteController::class, 'index'])->name('hss.delivery_route.index');
    Route::get('/delivery_route/create', [App\Http\Controllers\HSS\DeliveryRouteController::class, 'create'])->name('hss.delivery_route.create');
    Route::get('/delivery_route/edit/{id}', [App\Http\Controllers\HSS\DeliveryRouteController::class, 'edit'])->name('hss.delivery_route.edit');

    Route::get('/care_worker', [App\Http\Controllers\HSS\CareWorkerController::class, 'index'])->name('hss.care_worker.index');
    Route::get('/care_worker/create', [App\Http\Controllers\HSS\CareWorkerController::class, 'create'])->name('hss.care_worker.create');
    Route::get('/care_worker/edit/{id}', [App\Http\Controllers\HSS\CareWorkerController::class, 'edit'])->name('hss.care_worker.edit');

    Route::get('/duty_roster', [App\Http\Controllers\HSS\DutyRosterController::class, 'index'])->name('hss.duty_roster.index');
});

Route::prefix('ecs')->group(function() {
    Route::get('/programme', [App\Http\Controllers\ECS\ProgrammeController::class, 'index'])->name('ecs.programme.index');
    Route::get('/programme/create', [App\Http\Controllers\ECS\ProgrammeController::class, 'create'])->name('ecs.programme.create');
    Route::get('/programme/{id}/edit', [App\Http\Controllers\ECS\ProgrammeController::class, 'edit'])->name('ecs.programme.edit');

    //Route::get('/programme/register', [App\Http\Controllers\ECS\ProgrammeController::class, 'register'])->name('ecs.programme.register');
    //Route::get('/programme/waiting_list', [App\Http\Controllers\ECS\ProgrammeController::class, 'waitingList'])->name('ecs.programme.waiting_list');

    Route::get('/programme_register/{id}', [App\Http\Controllers\ECS\ProgrammeRegisterController::class, 'index'])->where('id', '[0-9]+')->name('ecs.programme_register.index');
    Route::get('/programme_register/create', [App\Http\Controllers\ECS\ProgrammeRegisterController::class, 'create'])->name('ecs.programme_register.create');
    Route::get('/programme_register/create_multiple', [App\Http\Controllers\ECS\ProgrammeRegisterController::class, 'createMultiple'])->name('ecs.programme_register.create_multiple');

    Route::get('/programme_attendance/{id}/create', [App\Http\Controllers\ECS\ProgrammeAttendanceController::class, 'create'])->where('id', '[0-9]+')->name('ecs.programme_attendance.create');
    Route::get('/programme_attendance/{attendance_id}/edit', [App\Http\Controllers\ECS\ProgrammeAttendanceController::class, 'edit'])->where('attendance_id', '[0-9]+')->name('ecs.programme_attendance.edit');
    Route::get('/programme_attendance/{id}', [App\Http\Controllers\ECS\ProgrammeAttendanceController::class, 'index'])->where('id', '[0-9]+')->name('ecs.programme_attendance.index');

    Route::get('/programme_waiting_list/{programme_id}/create', [App\Http\Controllers\ECS\ProgrammeWaitingListController::class, 'create'])->where('programme_id', '[0-9]+')->name('ecs.programme_waiting_list.create');
    Route::get('/programme_waiting_list/{programme_id}/draw', [App\Http\Controllers\ECS\ProgrammeWaitingListController::class, 'draw'])->where('programme_id', '[0-9]+')->name('ecs.programme_waiting_list.draw');
    Route::get('/programme_waiting_list/{waiting_id}/edit', [App\Http\Controllers\ECS\ProgrammeWaitingListController::class, 'edit'])->where('waiting_id', '[0-9]+')->name('ecs.programme_waiting_list.edit');
    Route::get('/programme_waiting_list/{id}', [App\Http\Controllers\ECS\ProgrammeWaitingListController::class, 'index'])->where('id', '[0-9]+')->name('ecs.programme_waiting_list.index');

    Route::post('/invoice', [App\Http\Controllers\ECS\InvoiceController::class, 'search'])->name('ecs.invoice.search');
    Route::get('/invoice/{invoice_id}', [App\Http\Controllers\ECS\InvoiceController::class, 'show'])->name('ecs.invoice.show');

    // meal
    Route::get('/meal', [App\Http\Controllers\ECS\MealController::class, 'index'])->name('ecs.meal.index');
    Route::get('/meal/create', [App\Http\Controllers\ECS\MealController::class, 'create'])->name('ecs.meal.create');
    Route::get('/meal/{id}/edit', [App\Http\Controllers\ECS\MealController::class, 'edit'])->where('id', '[0-9]+')->name('ecs.meal.edit');

    Route::get('/order_meal', [App\Http\Controllers\ECS\OrderMealController::class, 'index'])->name('ecs.order_meal.index');
    Route::get('/order_meal/create', [App\Http\Controllers\ECS\OrderMealController::class, 'create'])->name('ecs.order_meal.create');
    Route::get('/order_meal/{order_id}/edit', [App\Http\Controllers\ECS\OrderMealController::class, 'edit'])->name('ecs.order_meal.edit');
    Route::get('/order_meal/report', [App\Http\Controllers\ECS\OrderMealController::class, 'report'])->name('ecs.order_meal.report');

});
