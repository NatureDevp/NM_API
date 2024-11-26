<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PlantImagesPathController;
use App\Http\Controllers\PlantLocalNameController;
use App\Http\Controllers\PlantPlantsController;
use App\Http\Controllers\PlantTreatmentController;
use App\Http\Controllers\RemedyImagesPathController;
use App\Http\Controllers\RemedyIngredientController;
use App\Http\Controllers\RemedyRemediesController;
use App\Http\Controllers\RemedyStepController;
use App\Http\Controllers\RemedyTreatmentController;
use App\Http\Controllers\RemedyUsageController;
use App\Http\Controllers\RequestImagesPathController;
use App\Http\Controllers\RequestRequestsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;





Route::prefix('v1')->group(function () {

    // Authentication
    Route::post('users/register', [UserController::class, 'store']);
    Route::post('users/login', [AuthenticationController::class, 'login']);
    Route::post('users/session', [AuthenticationController::class, 'session']);

    // Reset Password
    Route::post('users/search_email', [AuthenticationController::class, 'searchEmail']);
    Route::post('users/reset', [AuthenticationController::class, 'reset']);
});



Route::middleware('auth:sanctum')->prefix('v1')->group(function () {

    // User API
    Route::apiResource('users', UserController::class);
    Route::post('users/{user}/avatar', [UserController::class, 'upload']);
    Route::get('users/{role}/type', [UserController::class, 'type']);


    // Request API
    Route::apiResource('requests', RequestRequestsController::class);
    Route::post('requests/image', [RequestImagesPathController::class, 'upload']);
    Route::post('requests/{image}/image', [RequestImagesPathController::class, 'update']);


    // Plant API
    Route::apiResource('plants', PlantPlantsController::class);
    Route::apiResource('plants/treatment', PlantTreatmentController::class);
    Route::delete('plants/treatment/{plantID}/clear', [PlantTreatmentController::class, 'clearAll']);

    Route::apiResource('plants/local_name', PlantLocalNameController::class);
    Route::delete('plants/local_name/{plantID}/clear', [PlantLocalNameController::class, 'clearAll']);


    Route::post('plants/{plant}/cover', [PlantPlantsController::class, 'uploadCover']);
    Route::post('plants/image', [PlantImagesPathController::class, 'store']);
    Route::post('plants/{image}/image', [PlantImagesPathController::class, 'update']);
    Route::delete('plants/image/{plantID}/clear', [PlantImagesPathController::class, 'clearAll']);



    // Remedy API
    Route::apiResource('remedies', RemedyRemediesController::class);
    Route::post('remedies/{remedy}/cover', [RemedyRemediesController::class, 'uploadCover']);

    Route::post('remedies/image', [RemedyImagesPathController::class, 'store']);
    Route::post('remedies/{image}/image', [RemedyImagesPathController::class, 'update']);
    Route::delete('remedies/image/{remedyID}/clear', [RemedyImagesPathController::class, 'clearAll']);

    Route::apiResource('remedies/step', RemedyStepController::class);
    Route::delete('remedies/step/{remedyID}/clear', [RemedyStepController::class, 'clearAll']);

    Route::apiResource('remedies/treatment', RemedyTreatmentController::class);
    Route::delete('remedies/treatment/{remedyID}/clear', [RemedyTreatmentController::class, 'clearAll']);

    Route::apiResource('remedies/ingredient', RemedyIngredientController::class);
    Route::delete('remedies/ingredient/{remedyID}/clear', [RemedyIngredientController::class, 'clearAll']);


    Route::apiResource('remedies/usage', RemedyUsageController::class);
    Route::delete('remedies/usage/{remedyID}/clear', [RemedyUsageController::class, 'clearAll']);



    // Image API
    Route::get('images/{imageName}', [ImageController::class, 'path']);

    // Logout API
    Route::post('users/logout', [AuthenticationController::class, 'logout']);
});



Route::prefix('v2')->group(function () {

    Route::apiResource('plants', PlantPlantsController::class);
    Route::apiResource('remedies', RemedyRemediesController::class);


    Route::get('images/{imageName}', [ImageController::class, 'path']);
});
