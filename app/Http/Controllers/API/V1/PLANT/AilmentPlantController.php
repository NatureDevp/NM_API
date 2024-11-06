<?php

namespace App\Http\Controllers\API\V1\PLANT;

use App\Http\Controllers\Controller;
use App\Models\Ailment_Plant;
use App\Http\Requests\StoreAilment_PlantRequest;
use App\Http\Requests\UpdateAilment_PlantRequest;
use Illuminate\Http\Request;

class AilmentPlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ailment_Plants = Ailment_Plant::with('ailment', 'plant')->get();
        return response()->json(['success' => true, 'message' => 'Ailment_Plants fetched successfully.', 'data' => $ailment_Plants], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 'name',
        // 'type',
        // 'description',
        // 'plant_id',
        $customMessages = [
            'name.required' => 'Required. Ailment name is required.',
            'description.required' => 'Required. Ailment description is required.',
            'plant_id.required' => 'Required. Plant id is required.',
            'plant_id.exists' => 'Invalid. Plant id does not exist.',
        ];

        $validation = [
            'name' => 'required|string',
            'description' => 'required|string',
            'plant_id' => 'required|exists:plants,id',
        ];
        $request->validate($validation, $customMessages);

        $ailment_Plant = Ailment_Plant::create($request->all());
        return response()->json(['success' => true, 'message' => 'Ailment_Plant created successfully.', 'data' => $ailment_Plant], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ailment_Plant $ailment_Plant)
    {
        $ailment_Plant = Ailment_Plant::with('plants')->get();
        return response()->json(['success' => true, 'message' => 'Ailment_Plant fetched successfully.', 'data' => $ailment_Plant], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAilment_PlantRequest $request, Ailment_Plant $ailment_Plant)
    {
        $ailment_Plant->update($request->all());
        return response()->json(['success' => true, 'message' => 'Ailment_Plant updated successfully.', 'data' => $ailment_Plant], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ailment_Plant $ailment_Plant)
    {
        $ailment_Plant->delete();
        return response()->json(['success' => true, 'message' => 'Ailment_Plant deleted successfully.'], 200);
    }
}
