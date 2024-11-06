<?php

namespace App\Http\Controllers\API\V1\REMEDY;

use App\Http\Controllers\Controller;
use App\Models\Step;
use App\Http\Requests\StoreStepRequest;
use App\Http\Requests\UpdateStepRequest;
use Illuminate\Http\Request;

class StepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $steps = Step::with('remedy')->get();

        if ($steps->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Empty. No steps found.'], 404);
        }
        return response()->json(['success' => true, 'message' => 'Steps fetched successfully.', 'data' => $steps], 200);
    }


    public function store(Request $request)
    {
        // 'name',
        // 'description',
        // 'remedy_id',
        $customMessage = [
            'name.required' => 'Required. Step name is required.',
            'name.string' => 'The name must be a string.',
            'description.required' => 'Required. Step description is required.',
            'remedy_id.required' => 'Required. Remedy id is required.',
            'remedy_id.exists' => 'Invalid. Remedy id does not exist.',
        ];

        $validation = [
            'name' => 'required|string',
            'description' => 'required|string',
            'remedy_id' => 'required|exists:remedies,id',
        ];
        $request->validate($validation, $customMessage);

        $step = Step::create($request->all());

        return response()->json(['success' => true, 'message' => 'Step created successfully.', 'data' => $step], 201);
    }


    public function show(Step $step)
    {
        $step->load('remedy');
        return response()->json(['success' => true, 'message' => 'Step fetched successfully.', 'data' => $step], 200);
    }

    public function update(Request $request, Step $step)
    {
        $step->update($request->all());
        return response()->json(['success' => true, 'message' => 'Step updated successfully.'], 200);
    }


    public function destroy(Step $step)
    {
        $step->delete();
        return response()->json(['success' => true, 'message' => 'Step deleted successfully.'], 200);
    }
}
