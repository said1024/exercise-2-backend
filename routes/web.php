<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::prefix("/api/task/")->group(function () {

    Route::post('', [TaskController::class,'store']);
    Route::get('{id}', [TaskController::class, 'showById']);
    Route::get('', [TaskController::class,'paginatedDisplay']);
    Route::put('{id}', [TaskController::class,'update']);
    Route::delete('{id}', [TaskController::class,'destroy']);



});




Route::get('/', function () {
    return view('welcome');

});

