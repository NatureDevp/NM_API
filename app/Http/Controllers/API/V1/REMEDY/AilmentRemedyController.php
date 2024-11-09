<?php

namespace App\Http\Controllers\API\V1\REMEDY;

use App\Http\Controllers\Controller;
use App\Models\Ailment_Remedy;
use App\Http\Requests\StoreAilment_RemedyRequest;
use App\Http\Requests\UpdateAilment_RemedyRequest;
use Illuminate\Http\Request;

class AilmentRemedyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ailment_Remedy = Ailment_Remedy::with('remedies')->get();
        if ($ailment_Remedy->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Empty. No ailment_Remedy found.'], 404);
        }
        return response()->json(['success' => true, 'message' => 'Ailment_Remedy fetched successfully.', 'data' => $ailment_Remedy], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $customMessages = [
            'name.required' => 'Required. Ailment name is required.',
            'description.required' => 'Required. Ailment description is required.',
            'remedy_id.required' => 'Required. Plant id is required.',
            'remedy_id.exists' => 'Invalid. Plant id does not exist.',
        ];

        $validation = [
            'name' => 'required|string',
            'description' => 'required|string',
            'remedy_id' => 'required|exists:remedies,id',
        ];
        $request->validate($validation, $customMessages);
        $ailment_Remedy = Ailment_Remedy::create($request->all());
        return response()->json(['success' => true, 'message' => 'Ailment_Remedy created successfully.', 'data' => $ailment_Remedy], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ailment_Remedy $ailment_Remedy)
    {
        $ailment_Remedy->load('remedies');
        return response()->json(['success' => true, 'message' => 'Ailment_Remedy fetched successfully.', 'data' => $ailment_Remedy], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ailment_Remedy $ailment_Remedy)
    {
        $ailment_Remedy->update($request->all());
        return response()->json(['success' => true, 'message' => 'Ailment_Remedy updated successfully.', 'data' => $ailment_Remedy], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ailment_Remedy $ailment_Remedy)
    {
        $ailment_Remedy->delete();
        return response()->json(['success' => true, 'message' => 'Ailment_Remedy deleted successfully.'], 200);
    }
}
