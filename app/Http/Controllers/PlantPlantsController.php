<?php

namespace App\Http\Controllers;

use App\Models\Plant_Plants;
use App\Http\Requests\StorePlant_PlantsRequest;
use App\Http\Requests\UpdatePlant_PlantsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PlantPlantsController extends Controller
{
    public function index()
    {
        $data = Plant_Plants::with(['create_by', 'update_by', 'requests_info'])->get();

        if ($data->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No plants found.'], 200);
        }
        return response()->json(['success' => true, 'message' => 'Plants fetched successfully.', 'data' => $data], 200);
    }

    //=============================================================================
    public function store(StorePlant_PlantsRequest $request)
    {


        $request->validated();
        // Create the plant
        $data = Plant_Plants::create([
            'name' => $request->name,
            'local_name' => $request->local_name ?? null,
            'description' => $request->description,
            'scientific_name' => $request->scientific_name,
            'treatment' => $request->treatment,
            'create_id' => $request->create_id,
            'request_id' => $request->request_id ?? null
        ]);

        return response()->json(['success' => true, 'message' => 'Plant created successfully.', 'data' => $data], 200);
    }



    //=============================================================================
    public function show(Plant_Plants $plant)
    {
        $data = $plant->load('create_by', 'update_by', 'requests_info');
        return response()->json(['success' => true, 'message' => 'Plant found.', 'data' => $data], 200);
    }


    //=============================================================================
    public function update(UpdatePlant_PlantsRequest $request, Plant_Plants $plant)
    {

        $request->validated();
        $isSuccess = $plant->update($request->all());
        if ($isSuccess) {
            return response()->json(['success' => true, 'message' => 'Remedy updated successfully.'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Remedy failed to update.'], 200);
    }


    //=============================================================================
    public function destroy(Plant_Plants $plant)
    {
        if ($plant->cover) {
            Storage::disk('public')->delete('plant_cover/' . $plant->cover);
        }

        $plant->delete();
        return response()->json(['success' => true, 'message' => 'Plant deleted successfully.'], 200);
    }



    //=============================================================================
    public function uploadCover(Request $request, Plant_Plants $plant)
    {

        $request->validate([
            'cover' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $named = $plant->cover;

        //delete old image
        $basePath = 'app/public/plant_cover/';

        if (file_exists(storage_path($basePath . $named)) && $named != null) {
            Storage::disk('public')->delete('plant_cover/' . $named);
            $named = null;
        }

        if ($request->hasFile('cover')) {
            //change name of image
            $file = $request->file('cover');
            $named = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('plant_cover', $named, 'public');
        }

        $plant->cover = $named;
        $plant->save();
        return response()->json(['success' => true, 'message' => 'Plant cover updated successfully.'], 200);
    }
}
