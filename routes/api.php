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
Route::apiResource('volunteer', VolunteerController::class);

Route::apiResource('news', NewsController::class);
Route::apiResource('donation', DonationController::class);
Route::apiResource('contact', ContactController::class);

Route::apiResource('blog', BlogController::class);
Route::get('/blog/{id}', [BlogController::class, 'show']);

Route::apiResource('comment', CommentController::class);
Route::get('/comments/{blogId}', [CommentController::class, 'commentBlogId']);


Route::get('/commentcount/{blogId}', [CommentController::class, 'numComment']);
