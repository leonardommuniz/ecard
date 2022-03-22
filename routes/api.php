<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CardController;
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
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
Route::post('/login', [AuthController::class,'login']);
Route::post('/logout', [AuthController::class,'logout']);
Route::post('/refresh', [AuthController::class,'refresh']);
Route::post('/me', [AuthController::class,'me']);
});
Route::post('/register',[UserController::class,'create']);
Route::middleware('auth:api')->group(function () {
    Route::prefix('user')->group(function(){
        Route::get('/',[UserController::class,'list']);
        Route::get('/{id}',[UserController::class,'show']);
        Route::delete('/{id}',[UserController::class,'delete']);
    });
    
    Route::prefix('card')->group(function(){
        Route::get('/',[CardController::class,'list']);
        Route::post('/',[CardController::class,'create']);
        Route::get('/{id}',[CardController::class,'show']);
        Route::delete('/{id}',[CardController::class,'delete']);
    });
});
