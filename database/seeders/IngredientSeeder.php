<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Remedy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all remedies
        $remedies = Remedy::all();

        foreach ($remedies as $remedy) {
            // Randomly determine the number of ingredients (between 2 and 5)
            $ingredientCount = rand(2, 5);

            for ($i = 0; $i < $ingredientCount; $i++) {
                Ingredient::create([
                    'name' => $this->getRandomIngredientName(), // Generate random ingredient name
                    'quantity' => rand(1, 10), // Random quantity between 1 and 10
                    'description' => 'This is a description for ' . $remedy->name . ' ingredient.', // Customize as needed
                    'remedy_id' => $remedy->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

    // Helper method to get a random ingredient name
    private function getRandomIngredientName()
    {
        $ingredients = [
            'Honey',
            'Turmeric',
            'Ginger',
            'Garlic',
            'Pepper',
            'Lemon Juice',
            'Olive Oil',
            'Coconut Oil',
            'Aloe Vera Gel',
            'Green Tea Extract'
        ]; // List of possible ingredient names

        return $ingredients[array_rand($ingredients)]; // Return a random ingredient name
    }
}
