<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ArticleController;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });
Route::get('/', [FeedController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);

Route::view('/search', 'feeds.index', [
    'title' => 'Search'
]);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'storeLogin']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'storeSignup']);

Route::get('/{user:username}', [UserController::class, 'index'])->name('profile');
Route::get('/{user:username}/feeds', [UserController::class, 'index'])->name('user-feeds');
Route::get('/{user:username}/articles', [UserController::class, 'userArticles'])->name('user-articles');
Route::get('/{user:username}/voted', [UserController::class, 'userVotes'])->name('user-voted');
Route::get('/{user:username}/edit', [UserController::class, 'update'])->name('user-edit')->middleware('auth');


