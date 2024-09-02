<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboartController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('layouts.auth');
// });

Route::get('/home', [DashboartController::class, 'index'])->name('home');
Route::get('/signIn', [DashboartController::class, 'signIn']);
Route::get('/signUp', [DashboartController::class, 'signUp'])->name('signUp');
Route::post('/createUser', [LoginController::class, 'createUser'])->name('createUser');
// Route::post('/register', [LoginController::class, 'createUser']);
// Route::get('/dashboard', [DashboartController::class, 'index'])->name('dashboard');

Route::get('/index', function () {
    return view('layout.index'); 
})->name('index');
Route::post('/logout', [LoginController::class, 'logoutUser'])->name('logoutUser');
Route::post('/login', [LoginController::class, 'loginUser'])->name('loginUser');
require __DIR__.'/auth.php';
