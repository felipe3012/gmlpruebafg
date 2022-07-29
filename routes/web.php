<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\IndependientController;
use App\Http\Controllers\SettingController;
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

Route::prefix('api/')->group(function () {
    Route::resource('client', ClientController::class);
    Route::resource('independient', IndependientController::class);
    Route::resource('setting', SettingController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
