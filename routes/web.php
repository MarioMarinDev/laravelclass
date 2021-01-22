<?php

use App\Http\Controllers\ValidationController;

use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('validation')->group(function() {
    Route::get('/', [ValidationController::class, 'index'])->name('validation.index');
    Route::get('/create', [ValidationController::class, 'create'])->name('validation.create');
    Route::post('/', [ValidationController::class, 'store'])->name('validation.store');
    Route::prefix('{validation_id}')->group(function() {
        Route::get('/', [ValidationController::class, 'show'])->name('validation.show');
        Route::get('/edit', [ValidationController::class, 'edit'])->name('validation.edit');
        Route::post('/', [ValidationController::class, 'update'])->name('validation.update');
        Route::delete('/', [ValidationController::class, 'delete'])->name('validation.delete');
    });
});
