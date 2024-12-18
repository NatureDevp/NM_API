<?php

namespace App\Http\Controllers;

use App\Models\Remedy_Remedies;
use App\Http\Requests\StoreRemedy_RemediesRequest;
use App\Http\Requests\UpdateRemedy_RemediesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RemedyRemediesController extends Controller
{

    //============================================================================================
    public function index()
    {
        $data = Remedy_Remedies::with('treatments', 'usages', 'steps',  'ingredients', 'images', 'create_by', 'update_by')->get();

        if ($data->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No remedies found.'], 200);
        }
        return response()->json(['success' => true, 'message' => 'Remedies fetched successfully.', 'data' => $data], 200);
    }


    //============================================================================================
    public function store(StoreRemedy_RemediesRequest $request)
    {

        $request->validated();

        $data = Remedy_Remedies::create($request->all());

        if ($data) {
            return response()->json(['success' => true, 'message' => 'Remedy created successfully.', 'data' => $data], 201);
        }
        return response()->json(['success' => false, 'message' => 'Remedy failed to create.'], 204);
    }


    //============================================================================================
    public function show(Remedy_Remedies $remedy)
    {
        $data = $remedy->load('treatments', 'usages', 'ingredients', 'steps', 'images', 'plant', 'create_by', 'update_by');
        return response()->json(['success' => true, 'message' => 'Remedy found.', 'data' => $data], 200);
    }


    //============================================================================================
    public function update(UpdateRemedy_RemediesRequest $request, Remedy_Remedies $remedy)
    {
        $request->validated();

        $isSuccess = $remedy->update($request->all());
        if ($isSuccess) {
            return response()->json(['success' => true, 'message' => 'Remedy updated successfully.'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Remedy failed to update.'], 200);
    }


    //============================================================================================
    public function destroy(Remedy_Remedies $remedy)
    {
        $data = $remedy->delete();
        if ($data) {
            return response()->json(['success' => true, 'message' => 'Remedy deleted successfully.'], 200);
        }
        return response()->json(['success' => false, 'message' => 'Remedy failed to delete.'], 204);
    }


    //============================================================================================
    public function uploadCover(Request $request, Remedy_Remedies $remedy)
    {

        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'cover' => 'required|image|mimes:jpeg,png,jpg|max:5048',
        ]);

        $named = $remedy->cover;

        //delete old image
        $basePath = 'app/public/remedy_cover/';

        if (file_exists(storage_path($basePath . $named)) && $named != null) {
            Storage::disk('public')->delete('remedy_cover/' . $named);
            $named = null;
        }

        if ($request->hasFile('cover')) {
            //change name of image
            $pname = str_replace(' ', '_', $request->name ?? 'Unknown');
            $file = $request->file('cover');

            $named = $pname . '_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('remedy_cover', $named, 'public');
        }

        $remedy->cover = $named;
        $remedy->save();
        return response()->json(['success' => true, 'message' => 'Remedy cover updated successfully.'], 200);
    }
}
