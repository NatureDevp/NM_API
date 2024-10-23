<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use App\Http\Requests\StorePlantRequest;
use App\Http\Requests\UpdatePlantRequest;
use Illuminate\Support\Facades\Validator;

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

        /*
             'name',
        'scientific',
        'description',
        'likes',
        'status',
        'image',
        
        */

        $validator = Validator::make($request->all(), $request->rules());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $validatedData = $validator->validated();
        try {

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = uniqid() . '_' . $validatedData['name'] . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('plant_image', $filename, 'public');
            }


            $plant = Plant::create([
                'name' => $validatedData['name'],
                'scientific' => $validatedData['scientific'],
                'description' => $validatedData['description'] ?? null,
                'ailment' => $validatedData['ailment'] ?? null,
                'image' => $path ?? null,
            ]);


            return response()->json([
                'message' => 'Plant created successfully',
                'data' => $plant
            ], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {

            return response()->json([
                'error' => 'Validation failed',
                'messages' => $e->errors()
            ], 422);
        } catch (\Exception $e) {

            return response()->json([
                'error' => 'An error occurred while creating the plant',
                'message' => $e->getMessage()
            ], 500);
        }
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
