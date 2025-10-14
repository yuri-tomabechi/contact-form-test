<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Authcontroller;

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
Route::get('/', [ContactController::class, 'index'])->name('home');
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);
Route::get('/thanks', function () {
    return view('contact.thanks');
});

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login']);

// 見るよう 
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');