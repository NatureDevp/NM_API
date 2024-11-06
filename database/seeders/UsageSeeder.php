<?php

namespace Database\Seeders;

use App\Models\Remedy;
use App\Models\Usage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $remedies = Remedy::all();

        foreach ($remedies as $remedy) {
            // Create usage entries for each remedy
            Usage::create([
                'name' => 'Usage for ' . $remedy->name, // Example name based on remedy
                'type' => $this->getRandomUsageType(),   // Randomly generated usage type
                'description' => 'Use ' . $remedy->name . ' as directed. Follow the instructions carefully for best results.', // Customize as needed
                'remedy_id' => $remedy->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    // Helper method to get a random usage type
    private function getRandomUsageType()
    {
        $types = ['Topical', 'Oral', 'Inhalation', 'Compress', 'Infusion']; // List of usage types
        return $types[array_rand($types)]; // Return a random type from the list
    }
}
