<?php

namespace App\Http\Controllers\API\V1\PLANT;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlantController extends Controller
{

    public function index()
    {
        $plants = Plant::with(['ailments', 'userCreateBy', 'userUpdateBy', 'images'])->get();

        if ($plants->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Empty. No plants found.'], 404);
        }
        return response()->json(['success' => true, 'message' => 'Plants fetched successfully.', 'data' => $plants], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customMessage = [
            'name.required' => 'Required. Plant name is required.',
            'description.required' => 'Required. Plant description is required.',
            'scientific.required' => 'Required. Plant scientific name is required.',
            'cover.required' => 'Required. Plant cover is required.',
            'status.in' => 'Invalid. Status must be Active or Inactive.',
            'created_by.exists' => 'Invalid. Admin id does not exist.',
        ];

        $validation = [
            'name' => 'required|string',
            'description' => 'required|string',
            'scientific' => 'required|string|unique:plants',
            'cover' => 'required|image',
            'status' => 'string|in:Active,Inactive',
            'created_by' => 'required|exists:users,id',
        ];

        $request->validate($validation, $customMessage);


        $coverID = uniqid('cover');
        $coverName = $request->name . '_' . $coverID . '.' . $request->cover->extension();
        $coverPath = $request->cover->storeAs('pic_cover_plants', $coverName, 'public');

        // Create the plant
        $plant = Plant::create([
            'name' => $request->name,
            'description' => $request->description,
            'scientific' => $request->scientific,
            'cover' => $coverPath,
            'created_by' => $request->created_by,
            'updated_by' => $request->created_by,
        ]);

        if (!$plant) {
            return response()->json(['success' => false, 'message' => 'Failed. Plant not created.'], 500);
        }

        $data = $plant->load('images');
        return response()->json(['success' => true, 'message' => 'Plant created successfully.', 'data' => $data], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Plant $plant)
    {
        $data = $plant->load('images', 'userCreateBy', 'userUpdateBy',);
        return response()->json(['success' => true, 'message' => 'Plant fetched successfully.', 'data' => $data], 200);
    }

    public function update(Request $request, Plant $plant)
    {
        $plant->update($request->all());
        return response()->json(['success' => true, 'message' => 'Plant updated successfully.'], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plant $plant)
    {
        if ($plant->cover) {
            Storage::disk('public')->delete($plant->cover);
        }

        $plant->delete();
        return response()->json(['success' => true, 'message' => 'Plant deleted successfully.'], 200);
    }


    public function updateAll(Request $request, $id)
    {
        $plant = Plant::find($id);

        $customMessage = [
            'name.required' => 'Required. Plant name is required.',
            'description.required' => 'Required. Plant description is required.',
            'scientific.required' => 'Required. Plant scientific name is required.',
            'cover.image' => 'The cover must be an image file.',
            'status.in' => 'Invalid. Status must be Active or Inactive.',
            'status.required' => 'Required. Status is required.',
            'updated_by.required' => 'Required. Admin id who updates is required.',
            'created_by.required' => 'Required. Admin id who creates is required.',
            'updated_by.exists' => 'Invalid. Admin id who updates does not exist.',
            'created_by.exists' => 'Invalid. Admin id who creates does not exist.',
        ];

        $validation = [
            'name' => 'required|string',
            'description' => 'required|string',
            'scientific' => 'required|string',
            'cover' => 'image|nullable', // Make cover optional
            'status' => 'string|in:Active,Inactive',
            'updated_by' => 'required|exists:users,id',
            'created_by' => 'required|exists:users,id',
        ];

        $request->validate($validation, $customMessage);
        $coverPath = $plant->cover;

        // Check if a new cover image is provided
        if ($request->hasFile('cover')) {
            // Remove existing cover if it exists
            if ($plant->cover) {
                Storage::disk('public')->delete($plant->cover);
            }

            // Process the new cover image
            $coverID = uniqid('cover_');
            $coverName = $request->name . '_' . $coverID . '.' . $request->cover->extension();
            $coverPath = $request->cover->storeAs('pic_cover_plants', $coverName, 'public');

            // Update the cover path in the plant record
            $coverPath = $coverPath;
        }

        // Update other plant attributes
        $plant->update([
            'name' => $request->name,
            'description' => $request->description,
            'scientific' => $request->scientific,
            'status' => $request->status,
            'cover' => $coverPath,
            'likes' => $request->likes,
            'updated_by' => $request->updated_by,
            'created_by' => $request->created_by
        ]);



        $data = $plant->load('images');
        return response()->json(['success' => true, 'message' => 'Plant updated successfully.', 'data' => $data], 200);
    }
}
