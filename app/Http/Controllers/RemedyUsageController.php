<?php

namespace App\Http\Controllers;

use App\Models\Remedy_Usage;
use App\Http\Requests\StoreRemedy_UsageRequest;
use App\Http\Requests\UpdateRemedy_UsageRequest;

class RemedyUsageController extends Controller
{
    public function index()
    {
        $data = Remedy_Usage::all();

        if ($data->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No usages found.'], 200);
        }
        return response()->json(['success' => true, 'message' => 'Usages fetched successfully.', 'data' => $data], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRemedy_UsageRequest $request)
    {
        $request->validated();
        $remedy_ingredient = Remedy_Usage::create($request->all());

        if ($remedy_ingredient) {
            return response()->json(['success' => true, 'message' => 'Usages created successfully.', 'data' => $remedy_ingredient], 201);
        }
        return response()->json(['success' => false, 'message' => 'Failed to create Usages.'], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Remedy_Usage $usage)
    {
        if ($usage) {
            return response()->json(['success' => true, 'message' => 'Usage found.', 'data' => $usage], 200);
        }
        return response()->json(['success' => false, 'message' => 'Usage not found.'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRemedy_UsageRequest $request, Remedy_Usage $usage)
    {
        $request->validated();
        $isSuccess = $usage->update($request->all());
        if ($isSuccess) {
            return response()->json(['success' => true, 'message' => 'Usage updated successfully.'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Usage failed to update.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Remedy_Usage $usage)
    {
        $isSuccess = $usage->delete();
        if ($isSuccess) {
            return response()->json(['success' => true, 'message' => 'Usage deleted successfully.'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Usage failed to delete.'], 200);
    }

    //===================================================================================

    public function clearAll($remedyID)
    {
        try {
            // Delete related records in Plant_Treatment
            $deletedCount = Remedy_Usage::where('remedy_id', $remedyID)->delete();

            if ($deletedCount === 0) {
                return response()->json(['success' => false, 'message' => 'No Usage found for the specified remedy ID.'], 404);
            }

            return response()->json(['success' => true, 'message' => "$deletedCount Usage cleared successfully."], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to clear Usage: ' . $e->getMessage()], 500);
        }
    }
}
