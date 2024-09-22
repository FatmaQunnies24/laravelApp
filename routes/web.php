<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CharifitController;


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

Route::group(['middleware' => 'check.token'], function () {
    Route::get('/home', [DashboartController::class, 'index'])->name('home');
});
Route::get('/signIn', [DashboartController::class, 'signIn']);
Route::get('/signUp', [DashboartController::class, 'signUp'])->name('signUp');
Route::post('/createUser', [LoginController::class, 'createUser'])->name('createUser');
// Route::post('/register', [LoginController::class, 'createUser']);
// Route::get('/dashboard', [DashboartController::class, 'index'])->name('dashboard');
Route::get('/index-horizontal', function () {
    return view('layouts.beginning');
})->name('index-horizontal');
Route::get('/index', function () {
    return view('layout.index'); 
})->name('index');
Route::post('/logout', [LoginController::class, 'logoutUser'])->name('logoutUser');
Route::post('/login', [LoginController::class, 'loginUser'])->name('loginUser');
require __DIR__.'/auth.php';
Route::put('/posts/{id}', [CharifitController::class, 'update']);


Route::get('/load-reasone/reasone', function () {
    return view('componentsPages.reasone');
});
           
Route::get('/load-reasone/activites', function () {
    return view('components.activity-component');
});
Route::get('/load-reasone/causes', function () {
    return view('componentsPages.causes');
});
Route::get('/load-reasone/volunteer', function () {
    return view('componentsPages.volunteer');
});
Route::get('/load-reasone/new', function () {
    return view('componentsPages.new');
});
Route::get('/load-reasone/blog', function () {
    return view('componentsPages.blog');
});
Route::get('/load-reasone/home', function () {
    return view('componentsPages.home');
});