<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\modelPedram2;
use app\Http\Controllers\ModelPedram2Controller;

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
 
Route::get('/apiuser', [\App\Http\Controllers\UserController::class, 'index']);

//Route::post('/register1', [\App::class,'registerx']);
Route::any('/login1', [\App\Http\Controllers\AccountController::class,'loginx'])->name( 'login1' );
Route::post('register1', [\App\Http\Controllers\AccountController::class,'registerx'])->name( 'register1' );

Route::group(['prefix' => 'user'], function () {
    Route::post('/register1', [\App\Http\Controllers\AccountController::class,'registerx']);
    Route::post('/login', [\App\Http\Controllers\AccountController::class,'login']);
});


// user
Route::middleware('checkToken')->group(function () {

    Route::group(['prefix' => 'user'], function () {
        Route::post('/logout', [\App\Http\Controllers\AccountController::class,'logout']);
    });
});

Route::any('/gpsshow',[\App\Http\Controllers\ModelPedram2Controller::class,'controller1'])->name( 'gpsshow' ); 


Route::post('/show','\App\Http\Controllers\ModelPedram2Controller@store'); 
Route::get('/show/{id}','\App\Http\Controllers\ModelPedram2Controller@show'); 
Route::delete('/show/{id}','\App\Http\Controllers\ModelPedram2Controller@destroy'); 
Route::put('/show/{id}','\App\Http\Controllers\ModelPedram2Controller@update'); 
 