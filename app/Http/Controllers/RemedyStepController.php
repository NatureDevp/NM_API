<?php

namespace App\Http\Controllers;

use App\Models\Remedy_Step;
use App\Http\Requests\StoreRemedy_StepRequest;
use App\Http\Requests\UpdateRemedy_StepRequest;

class RemedyStepController extends Controller
{
    public function index()
    {
        $data = Remedy_Step::all();

        if ($data->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No steps found.'], 200);
        }
        return response()->json(['success' => true, 'message' => 'Steps fetched successfully.', 'data' => $data], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRemedy_StepRequest $request)
    {
        $request->validated();
        $remedy_step = Remedy_Step::create($request->all());

        if ($remedy_step) {
            return response()->json(['success' => true, 'message' => 'Step created successfully.', 'data' => $remedy_step], 201);
        }
        return response()->json(['success' => false, 'message' => 'Failed to create step.'], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Remedy_Step $step)
    {
        if ($step) {
            return response()->json(['success' => true, 'message' => 'Step found.', 'data' => $step], 200);
        }
        return response()->json(['success' => false, 'message' => 'Step not found.'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRemedy_StepRequest $request, Remedy_Step $step)
    {
        $request->validated();
        $isSuccess = $step->update($request->all());
        if ($isSuccess) {
            return response()->json(['success' => true, 'message' => 'Step updated successfully.'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Step failed to update.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Remedy_Step $step)
    {
        $isSuccess = $step->delete();
        if ($isSuccess) {
            return response()->json(['success' => true, 'message' => 'Step deleted successfully.'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Step failed to delete.'], 200);
    }


    //

    public function clearAll($remedyID)
    {
        try {
            // Delete related records in Plant_Treatment
            $deletedCount = Remedy_Step::where('remedy_id', $remedyID)->delete();

            if ($deletedCount === 0) {
                return response()->json(['success' => false, 'message' => 'No step found for the specified plant ID.'], 404);
            }

            return response()->json(['success' => true, 'message' => "$deletedCount step cleared successfully."], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to clear steps: ' . $e->getMessage()], 500);
        }
    }
}
