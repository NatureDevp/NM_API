<?php

namespace Database\Seeders;

use App\Models\Remedy;
use App\Models\Step;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all remedies
        $remedies = Remedy::all();

        foreach ($remedies as $remedy) {
            // Generate a random number of steps between 3 and 5
            $stepCount = rand(3, 5);

            for ($i = 1; $i <= $stepCount; $i++) {
                Step::create([
                    'name' => $this->generateStepName($remedy->name, $i),
                    'description' => 'Step ' . $i . ' for ' . $remedy->name . ' involves following specific instructions for the remedy.', // Customize as needed
                    'remedy_id' => $remedy->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
    // Helper method to generate a step name
    private function generateStepName($remedyName, $index)
    {
        return 'Step ' . $index . ' for ' . $remedyName; // Customize as needed
    }
}
