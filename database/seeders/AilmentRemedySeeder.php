<?php

namespace Database\Seeders;

use App\Models\Ailment_Remedy;
use App\Models\Remedy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AilmentRemedySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all remedies
        $remedies = Remedy::all();

        foreach ($remedies as $remedy) {
            // Randomly determine the number of ailments (between 3 and 5)
            $ailmentCount = rand(3, 5);

            for ($i = 0; $i < $ailmentCount; $i++) {
                // Create a random ailment name and description
                $ailmentName = $remedy->name . ' Ailment ' . ($i + 1); // Example: "Turmeric Paste Ailment 1"
                $ailmentType = 'Common'; // You can randomize or change this as needed
                $ailmentDescription = 'Description for ' . $ailmentName; // Replace with a proper description if available

                Ailment_Remedy::create([
                    'name' => $ailmentName,
                    'type' => $ailmentType,
                    'description' => $ailmentDescription,
                    'remedy_id' => $remedy->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
