<?php

namespace App\Http\Controllers;

use App\Models\Plant_Images_Path;
use App\Http\Requests\StorePlant_Images_PathRequest;
use App\Http\Requests\UpdatePlant_Images_PathRequest;
use App\Http\Requests\UpdatePlant_PlantsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlantImagesPathController extends Controller
{
    //=============================================================================
    public function store(StorePlant_Images_PathRequest $request)
    {
        $request->validated();

        //upload new plant_image_Path

        if ($request->hasFile('image')) {
            //change name of image
            $file = $request->file('image');
            $named = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('plant_image', $named, 'public');
        }

        Plant_Images_Path::create([
            'plant_id' => $request->plant_id,
            'path' => $named
        ]);

        return response()->json(['success' => true, 'message' => 'Image uploaded successfully.'], 200);
    }


    //=============================================================================

    public function update(UpdatePlant_Images_PathRequest $request, Plant_Images_Path $image)
    {
        $request->validated();



        if (!$image) {
            return response()->json(['success' => false, 'message' => 'Image not found.'], 404);
        }

        // Get the current image name from the database
        $oldImage = $image->path;

        // Define the base path
        $basePath = 'app/public/plant_image/';

        // Delete the old image if it exists
        if ($oldImage && file_exists(storage_path($basePath . $oldImage))) {
            Storage::disk('public')->delete('plant_image/' . $oldImage);
        }

        // Initialize the new image name as null
        $newImageName = $oldImage;

        // If a new image is provided, save it
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newImageName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('plant_image', $newImageName, 'public');
        }

        $image->path = $newImageName;
        $image->save();

        return response()->json(['success' => true, 'message' => 'Plant image updated successfully.'], 200);
    }
}
