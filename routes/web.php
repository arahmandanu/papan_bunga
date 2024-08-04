<?php

use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FooterTextColorController;
use App\Http\Controllers\Admin\FooterTextController;
use App\Http\Controllers\Admin\PropertiesController;
use App\Http\Controllers\Admin\TextColorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AutoSyncController;
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

Route::get('/', [PublicDashboardController::class, 'index'])->middleware('subscribe')
    ->name('dashboard.index');

Route::group(['middleware' => ['alreadyLogin?']], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login.page');
    Route::post('/verify', [AuthController::class, 'verify'])->name('login.verify');
});

Route::get('/auto_sync', [AutoSyncController::class, 'index'])->middleware('subscribe')->name('autoSync');
Route::get('/get_local_currency/{id}', [AutoSyncController::class, 'getLocalCurrency'])->middleware('subscribe')->name('autoUpdateLocal');

Route::group(['prefix' => 'admin', 'middleware' => ['auth:web', 'subscribe']], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('ShowDashboard');

    Route::resource('currency', CurrencyController::class);
    Route::get('/auto_sync', [CurrencyController::class, 'autoSyncAdminCurrency'])->name('autoSyncAdmin');
    Route::resource('footer_text', FooterTextController::class);
    Route::resource('text_color', TextColorController::class);

    Route::get('/text_color/reset/{text_color}', [TextColorController::class, 'reset'])->name('resetColor');

    Route::group(['prefix' => 'properties'], function () {
        Route::get('/company', [PropertiesController::class, 'index'])->name('properties.index');
    });
});
