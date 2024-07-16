<?php

use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicDashboardController;
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

Route::get('/', [PublicDashboardController::class, 'index'])->name('dashboard.index');

Route::group(['middleware' => ['alreadyLogin?']], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login.page');
    Route::post('/verify', [AuthController::class, 'verify'])->name('login.verify');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth:web']], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('ShowDashboard');

    Route::resource('currency', CurrencyController::class);
});
