<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KartuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KarturController;
use App\Http\Controllers\HomeController;


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

Route::resource('barangsip', KartuController::class);

Route::get('dashboard', [KarturController::class, 'dashboard'])->name('dashboard');

Route::resource('kartusip', KarturController::class);


Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('index');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');