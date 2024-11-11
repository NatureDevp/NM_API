<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function path($imageName)
    {
        $path = storage_path('app/public/plant_cover/' . $imageName);

        // Check if the file exists
        if (!file_exists($path)) {
            return response()->json(['error' => 'Image not found'], 404);
        }

        // Get the file content and encode it in base64
        $imageData = base64_encode(file_get_contents($path));
        $mimeType = mime_content_type($path); // e.g., "image/jpeg"

        // Return JSON response with base64 data and filename
        return response()->json([
            'file_name' => $imageName,
            'mime_type' => $mimeType,
            'image_data' => $imageData,
        ]);
    }
}
