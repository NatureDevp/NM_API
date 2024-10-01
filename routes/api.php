<?php

use App\Http\Controllers\API\V1\PlantController;
use App\Http\Controllers\API\V1\RemedyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::prefix('/v1')->group(function () {
    Route::apiResource('/plants', PlantController::class);
    Route::post('/plants/update', [PlantController::class, 'update']);


    Route::apiResource('/remedies', RemedyController::class);
    Route::post('/remedies/update', [RemedyController::class, 'update']);
});



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
