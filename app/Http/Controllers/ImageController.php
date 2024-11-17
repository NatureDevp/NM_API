<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function path($imageName)
    {
        // Get all files in the public directory
        $files = Storage::disk('public')->allFiles();

        // Find the file with the specified name
        $matchingFile = collect($files)->first(function ($file) use ($imageName) {
            return basename($file) === $imageName;
        });

        if (!$matchingFile) {
            return response()->json(['message' => 'Image not found'], 404);
        }

        // Get the full path to the file
        $fullPath = storage_path('app/public/' . $matchingFile);

        // Get the file content and encode it in base64
        $imageData = base64_encode(file_get_contents($fullPath));
        $mimeType = mime_content_type($fullPath); // Use $fullPath instead of $path

        return response()->json([
            'success' => true,
            'message' => 'Image fetched successfully.',
            'data' => [
                'file_name' => $imageName,
                'mime_type' => $mimeType,
                'image_data' => $imageData,
            ]
        ]);
    }

    // public function path($imageName)
    // {

    //     //instead of this
    //     //can i find the file name path from storage folder without specifying the path

    //     $path = storage_path('app/public/plant_cover/' . $imageName);

    //     // Check if the file exists
    //     if (!file_exists($path)) {
    //         return response()->json(['error' => 'Image not found'], 404);
    //     }

    //     // Get the file content and encode it in base64
    //     $imageData = base64_encode(file_get_contents($path));
    //     $mimeType = mime_content_type($path); // e.g., "image/jpeg"

    //     // Return JSON response with base64 data and filename
    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Image fetched successfully.',
    //         'data' => [
    //             'file_name' => $imageName,
    //             'mime_type' => $mimeType,
    //             'image_data' => $imageData,
    //         ]
    //     ]);
    // }

    // public function pathPlantImage($imageName)
    // {
    //     $path = storage_path('app/public/plant_image/' . $imageName);

    //     // Check if the file exists
    //     if (!file_exists($path)) {
    //         return response()->json(['error' => 'Image not found'], 404);
    //     }

    //     // Get the file content and encode it in base64
    //     $imageData = base64_encode(file_get_contents($path));
    //     $mimeType = mime_content_type($path); // e.g., "image/jpeg"

    //     // Return JSON response with base64 data and filename
    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Image fetched successfully.',
    //         'data' => [
    //             'file_name' => $imageName,
    //             'mime_type' => $mimeType,
    //             'image_data' => $imageData,
    //         ]
    //     ]);
    // }
}
