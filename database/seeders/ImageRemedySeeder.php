<?php

namespace Database\Seeders;

use App\Models\Image_Remedy;
use App\Models\Remedy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageRemedySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all remedies
        $remedies = Remedy::all();

        foreach ($remedies as $remedy) {
            // Randomly determine the number of images (between 3 and 4)
            $imageCount = rand(3, 4);

            for ($i = 0; $i < $imageCount; $i++) {
                $imageName = strtolower(str_replace(' ', '_', $remedy->name)) . "_image_" . ($i + 1); // Image name
                $imagePath = 'images/' . strtolower(str_replace(' ', '_', $remedy->name)) . '/' . $imageName . '.jpg'; // Path based on remedy name

                Image_Remedy::create([
                    'name' => $imageName, // Set the image name
                    'path' => $imagePath,  // Set the image path
                    'remedy_id' => $remedy->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
