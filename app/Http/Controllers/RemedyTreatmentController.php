<?php

namespace App\Http\Controllers;

use App\Models\Remedy_Treatment;
use App\Http\Requests\StoreRemedy_TreatmentRequest;
use App\Http\Requests\UpdateRemedy_TreatmentRequest;

class RemedyTreatmentController extends Controller
{
    public function index()
    {
        $data = Remedy_Treatment::all();

        if ($data->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No treatment found.'], 200);
        }
        return response()->json(['success' => true, 'message' => 'Treatment fetched successfully.', 'data' => $data], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRemedy_TreatmentRequest $request)
    {
        $request->validated();
        $remedy_step = Remedy_Treatment::create($request->all());

        if ($remedy_step) {
            return response()->json(['success' => true, 'message' => 'Treatment created successfully.', 'data' => $remedy_step], 201);
        }
        return response()->json(['success' => false, 'message' => 'Failed to create treatment.'], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Remedy_Treatment $treatment)
    {
        if ($treatment) {
            return response()->json(['success' => true, 'message' => 'Treatment found.', 'data' => $treatment], 200);
        }
        return response()->json(['success' => false, 'message' => 'Treatment not found.'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRemedy_TreatmentRequest $request, Remedy_Treatment $treatment)
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
    public function destroy(Remedy_Treatment $treatment)
    {
        $isSuccess = $treatment->delete();
        if ($isSuccess) {
            return response()->json(['success' => true, 'message' => 'Treatment deleted successfully.'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Treatment failed to delete.'], 200);
    }

    //===================================================================================

    public function clearAll($remedyID)
    {
        try {
            // Delete related records in Plant_Treatment
            $deletedCount = Remedy_Treatment::where('remedy_id', $remedyID)->delete();

            if ($deletedCount === 0) {
                return response()->json(['success' => false, 'message' => 'No treatments found for the specified plant ID.'], 404);
            }

            return response()->json(['success' => true, 'message' => "$deletedCount treatments cleared successfully."], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to clear treatments: ' . $e->getMessage()], 500);
        }
    }
}
