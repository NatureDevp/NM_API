<?php

namespace App\Http\Controllers;

use App\Models\Remedy_Images_Path;
use App\Http\Requests\StoreRemedy_Images_PathRequest;
use App\Http\Requests\UpdateRemedy_Images_PathRequest;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;

class RemedyImagesPathController extends Controller
{
    public function store(StoreRemedy_Images_PathRequest $request)
    {
        $request->validated();

        //upload new plant_image_Path

        if ($request->hasFile('image')) {
            //change name of image
            $rname = str_replace(' ', '_', $request->name ?? 'Unknown');
            $file = $request->file('image');
            $named = $rname . '_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('remedy_image', $named, 'public');
        }

        Remedy_Images_Path::create([
            'remedy_id' => $request->remedy_id,
            'path' => $named
        ]);

        return response()->json(['success' => true, 'message' => 'Image uploaded successfully.'], 200);
    }


    //=============================================================================

    public function update(UpdateRemedy_Images_PathRequest $request,  Remedy_Images_Path $image)
    {
        $request->validated();



        if (!$image) {
            return response()->json(['success' => false, 'message' => 'Image not found.'], 404);
        }

        // Get the current image name from the database
        $oldImage = $image->path;

        // Define the base path
        $basePath = 'app/public/remedy_image/';

        // Delete the old image if it exists
        if ($oldImage && file_exists(storage_path($basePath . $oldImage))) {
            Storage::disk('public')->delete('remedy_image/' . $oldImage);
        }

        // Initialize the new image name as null
        $newImageName = $oldImage;

        // If a new image is provided, save it
        if ($request->hasFile('image')) {
            $rname = str_replace(' ', '_', $request->name ?? 'Unknown');
            $file = $request->file('image');
            $newImageName = $rname . '_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('remedy_image', $newImageName, 'public');
        }

        $image->path = $newImageName;
        $image->save();

        return response()->json(['success' => true, 'message' => 'Remedy image updated successfully.'], 200);
    }


    // =============================================================================
    public function clearAll($remedyID)
    {
        try {
            // Retrieve all images related to the plant ID
            $remedy_images = Remedy_Images_Path::where('remedy_id', $remedyID)->get();

            if ($remedy_images->isEmpty()) {
                return response()->json(['success' => false, 'message' => 'No images found for the specified plant ID.'], 404);
            }

            // Delete images and their associated files
            $remedy_images->each(function ($image) {
                // Delete the database record
                $image->delete();

                // Delete the file from storage
                if (Storage::disk('public')->exists('remedy_image/' . $image->path)) {
                    Storage::disk('public')->delete('remedy_image/' . $image->path);
                }
            });

            return response()->json(['success' => true, 'message' => 'Remedy images and files cleared successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to clear plant images: ' . $e->getMessage()], 500);
        }
    }
}
