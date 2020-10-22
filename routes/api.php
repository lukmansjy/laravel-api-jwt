<?php

use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('register', RegisterController::class);
Route::post('login', LoginController::class);
Route::post('logout', LogoutController::class);

Route::get('user', UserController::class);

Route::middleware('auth:api')->group(function(){
    Route::post('article', [ArticleController::class, 'store']);
    Route::patch('article/{article}', [ArticleController::class, 'update']);
});

Route::get('article/{article:slug}', [ArticleController::class, 'show']);
Route::get('articles', [ArticleController::class, 'index']);
