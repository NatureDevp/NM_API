<?php

namespace Database\Seeders;

use App\Models\Ailment_Plant;
use App\Models\Plant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AilmentPlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all plants
        $plants = Plant::all();

        foreach ($plants as $plant) {
            // Randomly determine the number of ailments (between 3 and 5)
            $ailmentCount = rand(3, 5);

            for ($i = 0; $i < $ailmentCount; $i++) {
                // Create a random ailment name and description
                $ailmentName = $plant->name . ' Ailment ' . ($i + 1); // Example: "Aloe Vera Ailment 1"
                $ailmentType = 'Common'; // You can randomize or change this as needed
                $ailmentDescription = 'Description for ' . $ailmentName; // Replace with a proper description if available

                Ailment_Plant::create([
                    'name' => $ailmentName,
                    'type' => $ailmentType,
                    'description' => $ailmentDescription,
                    'plant_id' => $plant->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
