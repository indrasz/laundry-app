<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LaundryController;
use App\Http\Controllers\ProfileController;
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

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::name('dashboard.')->prefix('dashboard')->group(function () {
        Route::middleware(['auth', 'admin'])->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index');
            Route::resource('laundry', LaundryController::class);
            Route::resource('history', HistoryController::class);
            Route::get('download/{id}', [LaundryController::class, 'downloadPdf'])->name('downloadPdf');
        });
    });
});

require __DIR__.'/auth.php';
