<?php

use App\Http\Controllers\People\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\People\UpdateController;
use App\Http\Controllers\People\CreatePeopleController;
use App\Http\Controllers\People\DeleteController;

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

Route::group(['middleware' => 'auth:sanctum', 'prefix' => 'people'], function() {
        Route::post('/create', CreatePeopleController::class);
        Route::get('/', [IndexController::class, 'getAll']);
        Route::get('/{people}', [IndexController::class, 'getOnly']);
        Route::patch('/{people}', UpdateController::class);
        Route::delete('/{people}', DeleteController::class);
    });