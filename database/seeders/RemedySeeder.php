<?php

namespace Database\Seeders;

use App\Models\Plant;
use App\Models\Remedy;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RemedySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all plants
        $plants = Plant::all();

        // Get all admins
        $admins = User::where('role', 'Admin')->get();

        // Possible remedy types
        $types = ['Topical', 'Oral', 'Inhalation', 'Infusion', 'Tincture'];

        foreach ($plants as $plant) {
            // Each plant will have 2 remedies
            for ($i = 1; $i <= 2; $i++) {
                // Randomly select an admin for creating and updating the remedy
                $creator = $admins->random();
                $updater = $admins->random();

                // Example remedy data based on the plant
                Remedy::create([
                    'name' => $this->generateRemedyName($plant->name, $i),
                    'type' => $types[array_rand($types)], // Randomly select a type from the array
                    'description' => 'This remedy utilizes ' . $plant->name . ' for various health benefits.',
                    'effect' => 'Effect of ' . $plant->name . ' ' . $this->generateEffect($i),
                    'ratings' => rand(1, 5), // Random ratings between 1 and 5
                    'status' => 'Active',
                    'plant_id' => $plant->id,
                    'created_by' => $creator->id,
                    'updated_by' => $updater->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

    // Helper method to generate a remedy name
    private function generateRemedyName($plantName, $index)
    {
        return ucfirst($plantName) . ' Remedy ' . $index; // Customize as needed
    }

    // Helper method to generate effects based on index
    private function generateEffect($index)
    {
        return $index === 1 ? 'to improve skin health' : 'for general wellness';
    }
}
