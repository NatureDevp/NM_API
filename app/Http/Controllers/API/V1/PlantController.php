<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use App\Http\Requests\StorePlantRequest;
use App\Http\Requests\UpdatePlantRequest;

class PlantController extends Controller
{

    public function index()
    {

        try {
            $plants = Plant::all();

            if ($plants->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => 'No plants found',
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => 'Plants retrieved successfully',
                'data' => $plants,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An internal server error occurred',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function store(StorePlantRequest $request)
    {
        //
    }


    public function show(Plant $plant)
    {
        //
    }


    public function update(UpdatePlantRequest $request, Plant $plant)
    {
        //
    }

    public function upload()
    {
        //
    }

    public function destroy(Plant $plant)
    {
        //
    }
}
