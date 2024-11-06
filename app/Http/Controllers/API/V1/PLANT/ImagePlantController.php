<?php

namespace App\Http\Controllers\API\V1\PLANT;

use App\Http\Controllers\Controller;
use App\Models\Image_Plant;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ImagePlantController extends Controller
{

    public function index()
    {
        $image_plant = Image_Plant::with('plant')->get();
        if ($image_plant->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Empty. No images found.'], 404);
        }
        return response()->json(['success' => true, 'message' => 'Images fetched successfully.', 'data' => $image_plant], 200);
    }


    public function store(Request $request)
    {

        $customMessage = [
            'name.string' => 'The name must be a string.',
            'path.required' => 'Required. Path is required.',
            'path.image' => 'The image must be an image file.',
            'plant_id.required' => 'Required. Plant id is required.',
            'plant_id.exists' => 'Invalid. Plant id does not exist.',
        ];

        $validation = [
            'name' => 'string',
            'path' => 'required|image',
            'plant_id' => 'required|exists:plants,id',
        ];

        $request->validate($validation, $customMessage);

        $coverID = uniqid('path');
        $coverName = $request->name . '_' . $coverID . '.' . $request->path->extension();
        $coverPath = $request->path->storeAs('pic_images_plants', $coverName, 'public');

        $image_plant = Image_Plant::create([
            'name' => $request->name ?? null,
            'path' => $coverPath,
            'plant_id' => $request->plant_id,
        ]);


        return response()->json(['success' => true, 'message' => 'Image uploaded successfully.', 'data' => $image_plant], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Image_Plant $image_Plant)
    {
        $data = $image_Plant->load('plant');
        return response()->json(['success' => true, 'message' => 'Image fetched successfully.', 'data' => $data], 200);
    }


    public function update(Request $request, Image_Plant $image_Plant)
    {
        $image_Plant->update($request->all());
        return response()->json(['success' => true, 'message' => 'Image updated successfully.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image_Plant $image_Plant)
    {
        if ($image_Plant->path) {
            Storage::disk('public')->delete($image_Plant->path);
        }
        $image_Plant->delete();
        return response()->json(['success' => true, 'message' => 'Image deleted successfully.'], 200);
    }


    public function updateAll(Request $request, $id)
    {

        $image_Plant = Image_Plant::find($id);

        $customMessage = [
            'path.required' => 'Required. Path is required.',
            'image.required' => 'Required. Image is required.',
            'plant_id.required' => 'Required. Plant id is required.',
            'plant_id.exists' => 'Invalid. Plant id does not exist.',
        ];

        $validation = [
            'path' => 'required|string',
            'image' => 'required|image',
            'plant_id' => 'required|exists:plants,id',

        ];

        $request->validate($validation, $customMessage);

        // Check if a new cover image is provided
        if ($request->hasFile('path')) {

            if ($image_Plant->cover) {
                Storage::disk('public')->delete($image_Plant->cover);
            }

            // Process the new cover image
            $coverID = uniqid('path');
            $coverName = $request->name . '_' . $coverID . '.' . $request->path->extension();
            $coverPath = $request->path->storeAs('pic_plants_images', $coverName, 'public');

            // Update the cover path in the plant record
            $coverPath = $coverPath;
        }


        $image_Plant->update([
            'name' => $request->name ?? null,
            'path' => $coverPath,
            'plant_id' => $request->plant_id,
        ]);

        return response()->json(['success' => true, 'message' => 'Image updated successfully.', 'data' => $image_Plant], 200);
    }


    public function fetchImage($filename)
    {
        // Define the path to the image
        $path = storage_path('app/public/storage/' . $filename);

        // Check if the file exists
        if (!file_exists($path)) {
            return response()->json(['success' => false, 'message' => 'Image not found.'], Response::HTTP_NOT_FOUND);
        }

        // Get the image contents
        $imageContents = file_get_contents($path);

        // Return the image bytes as a JSON response
        return response()->json([
            'success' => true,
            'data' => base64_encode($imageContents), // Encoding image to base64
        ]);
    }
}
