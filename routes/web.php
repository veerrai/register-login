<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AuthController::class, 'index'])->name('login');
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/postregister',[AuthController::class, 'postregister'])->name('register.post');
Route::post('/postlogin',[AuthController::class, 'postlogin'])->name('login.post');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
