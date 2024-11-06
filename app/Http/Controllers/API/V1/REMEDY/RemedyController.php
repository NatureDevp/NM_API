<?php

namespace App\Http\Controllers\API\V1\REMEDY;

use App\Http\Controllers\Controller;
use App\Models\Remedy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RemedyController extends Controller
{

    public function index()
    {
        $remedies = Remedy::with('plant', 'ailments', 'steps', 'usages', 'ingredients', 'images', 'userUpdateBy', 'userCreateBy')->get();

        if ($remedies->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Empty. No remedies found.'], 404);
        }
        return response()->json(['success' => true, 'message' => 'Remedies fetched successfully.', 'data' => $remedies], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $customMessage = [
            'name.required' => 'Required. Remedy name is required.',
            'type.required' => 'Required. Remedy type is required.',
            'description.required' => 'Required. Remedy description is required.',
            'status.in' => 'Invalid. Status must be Active or Inactive.',
            'status.required' => 'Required. Status is required.',
            'cover.required' => 'Required. Remedy cover is required.',
            'ratings.required' => 'Required. Remedy ratings is required.',
            'plant_id.required' => 'Required. Plant id is required.',
            'updated_by.required' => 'Required. Admin id who updates is required.',
            'created_by.required' => 'Required. Admin id who creates is required.',
            'updated_by.exists' => 'Invalid. Admin id who updates does not exist.',
            'created_by.exists' => 'Invalid. Admin id who creates does not exist.',
        ];

        $validation = [
            'name' => 'required|string',
            'type' => 'required|string',
            'description' => 'required|string',
            'status' => 'string|in:Active,Inactive',
            'cover' => 'required|image',
            'ratings' => 'required|integer',
            'plant_id' => 'required|exists:plants,id',
            'updated_by' => 'required|exists:users,id',
            'created_by' => 'required|exists:users,id',
        ];


        $request->validated($validation, $customMessage);



        $coverID = uniqid('cover');
        $coverName = $request->name . '_' . $coverID . '.' . $request->cover->extension();
        $coverPath = $request->cover->storeAs('pic_cover_remedies', $coverName, 'public');


        $remedy = Remedy::create([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'status' => $request->status,
            'cover' => $coverPath,
            'ratings' => $request->ratings,
            'plant_id' => $request->plant_id,
            'updated_by' => $request->updated_by,
            'created_by' => $request->created_by,
        ]);

        $data = $remedy->load('images');
        return response()->json(['success' => true, 'message' => 'Remedy created successfully.', 'data' => $data], 201);
    }

    public function show(Remedy $remedy)
    {
        $data = $remedy->load('images');
        return response()->json(['success' => true, 'message' => 'Remedy fetched successfully.', 'data' => $data], 200);
    }


    public function update(Request $request, Remedy $remedy)
    {
        $remedy->update($request->all());
        return response()->json(['success' => true, 'message' => 'Remedy updated successfully.'], 200);
    }


    public function destroy(Remedy $remedy)
    {
        $remedy->delete();
        return response()->json(['success' => true, 'message' => 'Remedy deleted successfully.'], 200);
    }



    public function updateAll(Request $request, $id)
    {
        $remedy = Remedy::find($id);
        $customMessage = [
            'name.required' => 'Required. Remedy name is required.',
            'type.required' => 'Required. Remedy type is required.',
            'description.required' => 'Required. Remedy description is required.',
            'status.in' => 'Invalid. Status must be Active or Inactive.',
            'status.required' => 'Required. Status is required.',
            'cover.required' => 'Required. Remedy cover is required.',
            'ratings.required' => 'Required. Remedy ratings is required.',
            'plant_id.required' => 'Required. Plant id is required.',
            'updated_by.required' => 'Required. Admin id who updates is required.',
            'created_by.required' => 'Required. Admin id who creates is required.',
            'updated_by.exists' => 'Invalid. Admin id who updates does not exist.',
            'created_by.exists' => 'Invalid. Admin id who creates does not exist.',
        ];

        $validation = [
            'name' => 'required|string',
            'type' => 'required|string',
            'description' => 'required|string',
            'status' => 'string|in:Active,Inactive',
            'cover' => 'required|image',
            'ratings' => 'required|integer',
            'plant_id' => 'required|exists:plants,id',
            'updated_by' => 'required|exists:users,id',
            'created_by' => 'required|exists:users,id',
        ];


        $request->validate($validation, $customMessage);


        if ($request->hasFile('cover')) {

            if ($remedy->cover) {
                Storage::disk('public')->delete($remedy->cover);
            }

            // Process the new cover image
            $coverID = uniqid('cover_');
            $coverName = $request->name . '_' . $coverID . '.' . $request->cover->extension();
            $coverPath = $request->cover->storeAs('pic_cover_remedies', $coverName, 'public');

            $coverPath = $coverPath;
        }

        $remedy->update([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'status' => $request->status,
            'cover' => $coverPath,
            'ratings' => $request->ratings,
            'plant_id' => $request->plant_id,
            'updated_by' => $request->updated_by,
            'created_by' => $request->created_by,
        ]);

        $data = $remedy->load('images');
        return response()->json(['success' => true, 'message' => 'Remedy created successfully.', 'data' => $data], 200);
    }
}
