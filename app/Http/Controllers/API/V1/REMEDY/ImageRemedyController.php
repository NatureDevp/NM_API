<?php

namespace App\Http\Controllers\API\V1\REMEDY;

use App\Http\Controllers\Controller;
use App\Models\Image_Remedy;
use App\Http\Requests\StoreImage_RemedyRequest;
use App\Http\Requests\UpdateImage_RemedyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageRemedyController extends Controller
{

    public function index()
    {
        $remedies = Image_Remedy::with('remedy')->get();
        if ($remedies->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Empty. No images found.'], 404);
        }
        return response()->json(['success' => true, 'message' => 'Images fetched successfully.', 'data' => $remedies], 200);
    }


    public function store(Request $request)
    {

        $customMessage = [
            'name.string' => 'The name must be a string.',
            'path.required' => 'Required. Path is required.',
            'image.image' => 'The image must be an image file.',
            'remedy_id.required' => 'Required. Remedy id is required.',
            'remedy_id.exists' => 'Invalid. Remedy id does not exist.',
        ];

        $validation = [
            'name' => 'string',
            'path' => 'required|image',
            'remedy_id' => 'required|exists:remedies,id',
        ];

        $request->validate($validation, $customMessage);

        $coverID = uniqid('path');
        $coverName = $request->name . '_' . $coverID . '.' . $request->path->extension();
        $coverPath = $request->path->storeAs('pic_images_remedies', $coverName, 'public');

        $image_remedy = Image_Remedy::create([
            'name' => $request->name ?? null,
            'path' => $coverPath,
            'remedy_id' => $request->remedy_id,
        ]);


        return response()->json(['success' => true, 'message' => 'Image uploaded successfully.', 'data' => $image_remedy], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Image_Remedy $image_Remedy)
    {
        $data = $image_Remedy->load('remedy');
        return response()->json(['success' => true, 'message' => 'Image fetched successfully.', 'data' => $data], 200);
    }


    public function update(Request $request, Image_Remedy $image_Remedy)
    {
        $image_Remedy->update($request->all());
        return response()->json(['success' => true, 'message' => 'Image updated successfully.', 'data' => $image_Remedy], 200);
    }


    public function destroy(Image_Remedy $image_Remedy)
    {
        if ($image_Remedy->path) {
            Storage::disk('public')->delete($image_Remedy->path);
        }
        $image_Remedy->delete();
        return response()->json(['success' => true, 'message' => 'Image deleted successfully.'], 200);
    }

    public function updateAll(Request $request, $id)
    {
        $image_Remedy = Image_Remedy::find($id);
        $customMessage = [
            'name.string' => 'The name must be a string.',
            'path.required' => 'Required. Path is required.',
            'image.required' => 'Required. Image is required.',
            'remedy_id.required' => 'Required. Remedy id is required.',
            'remedy_id.exists' => 'Invalid. Remedy id does not exist.',
        ];
        $validation = [
            'name' => 'string',
            'path' => 'required|string',
            'remedy_id' => 'required|exists:remedies,id',
        ];
        $request->validate($validation, $customMessage);
        // Check if a new cover image is provided
        if ($request->hasFile('path')) {
            if ($image_Remedy->path) {
                Storage::disk('public')->delete($image_Remedy->path);
            }
            // Process the new cover image
            $coverID = uniqid('path');
            $coverName = $request->name . '_' . $coverID . '.' . $request->path->extension();
            $coverPath = $request->path->storeAs('pic_images_remedies', $coverName, 'public');
            $image_Remedy->path = $coverPath;
        }
        $image_Remedy->save();
        return response()->json(['success' => true, 'message' => 'Image updated successfully.', 'data' => $image_Remedy], 200);
    }
}
