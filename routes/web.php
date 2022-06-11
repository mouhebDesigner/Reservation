<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReservationController;

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
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('clients', [ClientController::class, 'index'])->name('clients.index');
    Route::resource('types', TypeController::class);
    Route::resource('salles', SalleController::class);
    Route::get('reservations', [ReservationController::class, 'index'])->name('reservations.index');
    Route::get('users', [UserController::class, 'index']);
    Route::get('users/{id}/valider', [UserController::class, 'valider']);
    Route::get('users/{id}/refuser', [UserController::class, 'refuser']);

});
Route::get('salles', [SalleController::class, 'index'])->name('salles.index');
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
