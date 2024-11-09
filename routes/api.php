<?php

use App\Http\Controllers\API\AUTH\Authentication;
use App\Http\Controllers\API\V1\PLANT\AilmentPlantController;
use App\Http\Controllers\API\V1\PLANT\ImagePlantController;
use App\Http\Controllers\API\V1\PLANT\PlantController;
use App\Http\Controllers\API\V1\REMEDY\AilmentRemedyController;
use App\Http\Controllers\API\V1\REMEDY\ImageRemedyController;
use App\Http\Controllers\API\V1\REMEDY\IngredientController;
use App\Http\Controllers\API\V1\REMEDY\RemedyController;
use App\Http\Controllers\API\V1\REMEDY\StepController;
use App\Http\Controllers\API\V1\REMEDY\UsageController;
use App\Http\Controllers\API\V1\REQUEST\RequestPlantController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('auth')->group(function () {
    Route::post('/register', [Authentication::class, 'signup']);
    Route::post('/login', [Authentication::class, 'login']);
    Route::post('/logout', [Authentication::class, 'logout'])->middleware('auth:sanctum');
    Route::get('/session', [Authentication::class, 'session']);
    Route::post('/searchEmail', [Authentication::class, 'searchEmail']);
    Route::post('/resetPassword', [Authentication::class, 'reset']);
});


Route::middleware('auth:sanctum')->prefix('v2')->group(function () {
    Route::apiResource('/plants', PlantController::class);
    Route::post('/plants/update/{id}', [PlantController::class, 'updateAll']);
});

Route::middleware('auth:sanctum')->prefix('v2')->group(function () {
    Route::apiResource('/remedies', RemedyController::class);
    Route::post('/remedies/update/{id}', [RemedyController::class, 'updateAll']);
});

Route::middleware('auth:sanctum')->prefix('v2/image')->group(function () {
    Route::apiResource('/plants', ImagePlantController::class);
    Route::post('/plants/update/{id}', [ImagePlantController::class, 'updateAll']);

    Route::apiResource('/remedies', ImageRemedyController::class);
    Route::post('/remedies/update/{id}', [ImageRemedyController::class, 'updateAll']);
});

Route::middleware('auth:sanctum')->prefix('v2/remedy')->group(function () {
    Route::apiResource('/steps', StepController::class);
    Route::apiResource('/ingredients', IngredientController::class);
    Route::apiResource('/usages', UsageController::class);
});


Route::middleware('auth:sanctum')->prefix('v2/ailment')->group(function () {
    Route::apiResource('/plants', AilmentPlantController::class);
    Route::apiResource('/remedies', AilmentRemedyController::class);
});


Route::middleware('auth:sanctum')->prefix('v2')->group(function () {
    Route::apiResource('/users', UserController::class);
    Route::get('/users/role/{type}', [UserController::class, 'getUserRoleOnly']);
});

Route::middleware('auth:sanctum')->prefix('v2')->group(function () {
    Route::apiResource('/requests', RequestPlantController::class);
    Route::get('workplace/{id}', [RequestPlantController::class, 'userWorkplace']);
});



Route::middleware('auth:sanctum')->prefix('v2')->group(function () {
    Route::get('/storage/{path}',  [ImagePlantController::class, 'fetchImage']);
});
