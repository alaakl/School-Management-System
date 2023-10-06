<?php

use App\Http\Controllers\Students\StudentController;
use App\Http\Controllers\Teachers\TeacherController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('/student')->group(function(){
    Route::post('insert',[StudentController::class,'addstudent']);
    Route::get('/',[StudentController::class,'getallstudent']);
    Route::get('show',[StudentController::class,'showstudent']);
    Route::delete('delete',[StudentController::class,'destroy']);
    Route::put('update',[StudentController::class,'update']);
    Route::get('search',[StudentController::class,'search']);

});


Route::prefix('/teacher')->group(function(){
    Route::get('/',[TeacherController::class,'getallteacher']);
    // Route::get('/',[StudentController::class,'getallstudent']);
    Route::get('show',[TeacherController::class,'showteacher']);
    Route::get('search',[TeacherController::class,'search']);
    });

