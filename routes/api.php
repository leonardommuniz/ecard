<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

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