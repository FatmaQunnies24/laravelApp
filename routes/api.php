<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharifitController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ReasonOfHelpingController;

use App\Http\Controllers\DashboartController;
use App\Http\Controllers\BeginningController;
use App\Http\Controllers\Controller;


use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('posts', CharifitController::class);
Route::apiResource('activities', ActivitiesController::class);
Route::apiResource('causes', CausesController::class);
Route::post('/causes/{id}', [CausesController::class, 'update']);
Route::delete('causes/{id}', [CausesController::class, 'destroy']);
Route::post('/volunteer/{id}', [VolunteerController::class, 'update']); 
Route::delete('/volunteer/{id}', [VolunteerController::class, 'destroy']); 

// Route::get('/causes', [CauseController::class, 'index']);

Route::apiResource('volunteer', VolunteerController::class);
Route::apiResource('beginning', BeginningController::class);
Route::put('/beginning/{id}', [BeginningController::class, 'update'])->name('update');
Route::post('/posts/{id}', [CharifitController::class, 'update']);
Route::delete('/posts/{id}', [CharifitController::class, 'destroy']);
Route::post('/activities/{id}', [ActivitiesController::class, 'update'])->name('activities.update');

Route::apiResource('news', NewsController::class);
Route::post('/news/{id}', [NewsController::class, 'update']);  
Route::delete('/news/{id}', [NewsController::class, 'destroy']); 
Route::apiResource('donation', DonationController::class);
Route::apiResource('contact', ContactController::class);
// Route::apiResource('about', AboutController::class);
Route::apiResource('about', AboutController::class);
Route::post('/about/{id}', [AboutController::class, 'update']);  

Route::apiResource('blog', BlogController::class);
// Route::apiResource('login', LoginController::class);
Route::post('/login', [LoginController::class, 'loginUser']);
Route::post('/register', [LoginController::class, 'createUser']);
Route::post('/register', [LoginController::class, 'createUser'])->name('register');

Route::get('/blog/{id}', [BlogController::class, 'show']);
Route::post('/blog/{id}', [BlogController::class, 'update']);
Route::delete('/blog/{id}', [BlogController::class, 'destroy']);

Route::apiResource('comment', CommentController::class);
Route::get('/comments/{blogId}', [CommentController::class, 'commentBlogId']);


Route::get('/commentcount/{blogId}', [CommentController::class, 'numComment']);
Route::post('/logout', [LoginController::class, 'logoutUser'])->name('logoutUser');
Route::post('/signIn', [LoginController::class, 'loginUser'])->name('loginUser');
Route::get('/home', [DashboartController::class, 'index'])->name('home');
Route::post('/upload-image', [Controller::class, 'uploadImage']);
