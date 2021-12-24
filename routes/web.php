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
Route::group(['prefix' => 'verified', 'namespace' => 'Verified', 'middleware' => 'verified'], function () {
    Route::get('/', [\App\Http\Controllers\VerifiedController::class, 'index'])->name('home.index');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin.index');
    Route::get('decisions', [\App\Http\Controllers\Admin\AddDecisionsController::class, 'index'])->name('admin.decisions');
    Route::post('decisions/insert', [\App\Http\Controllers\Admin\AddDecisionsController::class, 'insert'])->name('decisions.insert');
    Route::get('decisions/delete/{id}',[\App\Http\Controllers\Admin\AddDecisionsController::Class,"delete"]);
    Route::get('confirm/{user}', [\App\Http\Controllers\Admin\MainController::class, 'confirm']);
});
Route::get('decisions/pdfexport/{id}', [\App\Http\Controllers\Admin\AddDecisionsController::class, 'pdfexport']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('register', [\App\Http\Controllers\UserController::class, 'create'])->name('register.create');
    Route::post('store', [\App\Http\Controllers\UserController::class, 'store'])->name('register.store');
    Route::get('/', [\App\Http\Controllers\UserController::class, 'loginForm'])->name('login.create');
    Route::post('loin', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
});

Route::get('logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout')->middleware('auth');
