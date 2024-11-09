<?php

namespace App\Http\Controllers\API\V1\REMEDY;

use App\Http\Controllers\Controller;
use App\Models\Usage;
use App\Http\Requests\StoreUsageRequest;
use App\Http\Requests\UpdateUsageRequest;
use Illuminate\Http\Request;

class UsageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usages = Usage::with('remedy')->get();
        if ($usages->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Empty. No usages found.'], 404);
        }
        return response()->json(['success' => true, 'message' => 'Usages fetched successfully.', 'data' => $usages], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 'name',
        // 'type',
        // 'description',
        $customMessages = [
            'name.required' => 'Required. Usage name is required.',
            'description.required' => 'Required. Usage description is required.',
            'remedy_id.required' => 'Required. Remedy id is required.',
            'remedy_id.exists' => 'Invalid. Remedy id does not exist.',
        ];

        $validation = [
            'name' => 'required|string',
            'description' => 'required|string',
            'remedy_id' => 'required|exists:remedies,id',
        ];

        $request->validate($validation, $customMessages);

        $usage = Usage::create($request->all());

        return response()->json(['success' => true, 'message' => 'Usage created successfully.', 'data' => $usage], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Usage $usage)
    {
        $usage->load('remedy');
        return response()->json(['success' => true, 'message' => 'Usage fetched successfully.', 'data' => $usage], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsageRequest $request, Usage $usage)
    {
        $usage->update($request->all());
        return response()->json(['success' => true, 'message' => 'Usage updated successfully.', 'data' => $usage], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usage $usage)
    {
        $usage->delete();
        return response()->json(['success' => true, 'message' => 'Usage deleted successfully.'], 200);
    }
}
