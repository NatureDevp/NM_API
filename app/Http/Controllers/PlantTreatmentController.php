<?php

namespace App\Http\Controllers;

use App\Models\Plant_Treatment;
use App\Http\Requests\StorePlant_TreatmentRequest;
use App\Http\Requests\UpdatePlant_TreatmentRequest;
use App\Models\Plant_Plants;

class PlantTreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Plant_Treatment::all();

        if ($data->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No treatments found.'], 200);
        }
        return response()->json(['success' => true, 'message' => 'Treatments fetched successfully.', 'data' => $data], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlant_TreatmentRequest $request)
    {
        $request->validated();
        $treatment = Plant_Treatment::create($request->all());

        if ($treatment) {
            return response()->json(['success' => true, 'message' => 'Treatment created successfully.', 'data' => $treatment], 201);
        }
        return response()->json(['success' => false, 'message' => 'Failed to create treatment.'], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Plant_Treatment $treatment)
    {
        if ($treatment) {
            return response()->json(['success' => true, 'message' => 'Treatment found.', 'data' => $treatment], 200);
        }
        return response()->json(['success' => false, 'message' => 'Treatment not found.'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlant_TreatmentRequest $request, Plant_Treatment $treatment)
    {
        $request->validated();
        $isSuccess = $treatment->update($request->all());
        if ($isSuccess) {
            return response()->json(['success' => true, 'message' => 'Treatment updated successfully.'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Treatment failed to update.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plant_Treatment $treatment)
    {
        $isSuccess = $treatment->delete();
        if ($isSuccess) {
            return response()->json(['success' => true, 'message' => 'Treatment deleted successfully.'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Treatment failed to delete.'], 200);
    }


    //

    public function clearAll($plantID)
    {
        try {
            // Delete related records in Plant_Treatment
            $deletedCount = Plant_Treatment::where('plant_id', $plantID)->delete();

            if ($deletedCount === 0) {
                return response()->json(['success' => false, 'message' => 'No treatments found for the specified plant ID.'], 404);
            }

            return response()->json(['success' => true, 'message' => "$deletedCount treatments cleared successfully."], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to clear treatments: ' . $e->getMessage()], 500);
        }
    }
}
