<?php

namespace App\Http\Controllers;

use App\Models\Plant_Local_Name;
use App\Http\Requests\StorePlant_Local_NameRequest;
use App\Http\Requests\UpdatePlant_Local_NameRequest;

class PlantLocalNameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $names = Plant_Local_Name::all();
        if ($names) {
            return response()->json(['success' => true, 'message' => 'Names found.', 'data' => $names], 200);
        }
        return response()->json(['success' => false, 'message' => 'Names not found.'], 404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlant_Local_NameRequest $request)
    {
        $request->validated();
        $name = Plant_Local_Name::create($request->all());

        if ($name) {
            return response()->json(['success' => true, 'message' => 'Name created successfully.', 'data' => $name], 201);
        }
        return response()->json(['success' => false, 'message' => 'Failed to create name.'], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Plant_Local_Name $local_name)
    {
        if ($local_name) {
            return response()->json(['success' => true, 'message' => 'Name found.', 'data' => $local_name], 200);
        }
        return response()->json(['success' => false, 'message' => 'Name not found.'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlant_Local_NameRequest $request, Plant_Local_Name $local_name)
    {
        $request->validated();
        $isSuccess = $local_name->update($request->all());
        if ($isSuccess) {
            return response()->json(['success' => true, 'message' => 'Name updated successfully.'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Name failed to update.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plant_Local_Name $local_name)
    {
        $isSuccess = $local_name->delete();
        if ($isSuccess) {
            return response()->json(['success' => true, 'message' => 'Name deleted successfully.'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Name failed to delete.'], 200);
    }


    public function clearAll($plantID)
    {
        try {
            // Retrieve all images related to the plant ID
            $local_names = Plant_Local_Name::where('plant_id', $plantID)->get();

            if ($local_names->isEmpty()) {
                return response()->json(['success' => false, 'message' => 'No names found for the specified plant ID.'], 404);
            }

            // Delete images and their associated files
            $local_names->each(function ($name) {
                // Delete the database record
                $name->delete();
            });

            return response()->json(['success' => true, 'message' => 'Names and files cleared successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to clear names: ' . $e->getMessage()], 500);
        }
    }
}
