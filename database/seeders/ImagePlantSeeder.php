<?php

namespace Database\Seeders;

use App\Models\Image_Plant;
use App\Models\Plant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagePlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all plants
        $plants = Plant::all();

        foreach ($plants as $plant) {
            // Randomly determine the number of images (between 3 and 5)
            $imageCount = rand(3, 5);

            for ($i = 0; $i < $imageCount; $i++) {
                $imageName = strtolower(str_replace(' ', '_', $plant->name)) . "_image_" . ($i + 1); // Image name
                $imagePath = 'images/' . strtolower(str_replace(' ', '_', $plant->name)) . '/' . $imageName . '.jpg'; // Path based on plant name

                Image_Plant::create([
                    'name' => $imageName, // Set the image name
                    'path' => $imagePath,  // Set the image path
                    'plant_id' => $plant->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
