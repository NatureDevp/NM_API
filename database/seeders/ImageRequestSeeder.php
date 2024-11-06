<?php

namespace Database\Seeders;

use App\Models\Image_Request;
use App\Models\RequestPlant;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all remedies
        $requests = RequestPlant::all();

        foreach ($requests as $request) {
            // Randomly determine the number of images (between 3 and 4)
            $imageCount = rand(3, 4);

            for ($i = 0; $i < $imageCount; $i++) {
                $imageName = strtolower(str_replace(' ', '_', $request->name)) . "_image_" . ($i + 1); // Image name
                $imagePath = 'images/' . strtolower(str_replace(' ', '_', $request->name)) . '/' . $imageName . '.jpg'; // Path based on remedy name

                Image_Request::create([
                    'name' => $imageName, // Set the image name
                    'path' => $imagePath,  // Set the image path
                    'request_plant_id' => $request->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
