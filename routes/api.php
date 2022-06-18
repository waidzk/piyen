<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ArticleController;

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

Route::resource('/articles', ArticleController::class);
Route::resource('/users', UserController::class);

Route::post('/articles/{id}', [ArticleController::class, 'update']);
Route::get('/users/articles/{id}', [ArticleController::class, 'userArticles']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return response()->json([ 'valid' => auth()->check() ]);
});
