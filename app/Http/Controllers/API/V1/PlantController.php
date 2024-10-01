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
        $plants = Plant::all();

        return response()->json([
            'success' => true,
            'message' => 'Plants retrieved successfully',
            'data' => $plants,
        ], 200);
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


    public function destroy(Plant $plant)
    {
        //
    }
}
