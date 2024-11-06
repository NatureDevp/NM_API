<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(UserSeeder::class);
        $this->call(PlantSeeder::class);
        $this->call(RemedySeeder::class);
        $this->call(StepSeeder::class);
        $this->call(UsageSeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(AilmentSeeder::class);
        $this->call(AilmentPlantSeeder::class);
        $this->call(AilmentRemedySeeder::class);
        $this->call(ImagePlantSeeder::class);
        $this->call(ImageRemedySeeder::class);
        $this->call(RequestPlantSeeder::class);
        $this->call(ImageRequestSeeder::class);
    }
}
