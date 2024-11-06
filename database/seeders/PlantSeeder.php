<?php

namespace Database\Seeders;

use App\Models\Plant;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get admin users
        $admins = User::where('role', 'Admin')->get();

        // Unique plant data for each admin
        $plantsData = [
            // Joel Gutlay
            [
                'name' => 'Aloe Vera',
                'scientific' => 'Aloe barbadensis miller',
                'description' => 'Aloe vera is known for its soothing and healing properties for skin conditions.',
                'status' => 'Active',
                'likes' => 15,
                'created_by' => $admins[0]->id, // Joel Gutlay
                'updated_by' => $admins[0]->id,
            ],
            [
                'name' => 'Peppermint',
                'scientific' => 'Mentha piperita',
                'description' => 'Peppermint is used for digestive issues and has a refreshing aroma.',
                'status' => 'Active',
                'likes' => 20,
                'created_by' => $admins[0]->id, // Joel Gutlay
                'updated_by' => $admins[0]->id,
            ],
            // Ann Aldave
            [
                'name' => 'Chamomile',
                'scientific' => 'Matricaria chamomilla',
                'description' => 'Chamomile is known for its calming effects and is often used in teas.',
                'status' => 'Active',
                'likes' => 10,
                'created_by' => $admins[1]->id, // Ann Aldave
                'updated_by' => $admins[1]->id,
            ],
            [
                'name' => 'Lavender',
                'scientific' => 'Lavandula angustifolia',
                'description' => 'Lavender is famous for its fragrant flowers and soothing properties.',
                'status' => 'Active',
                'likes' => 25,
                'created_by' => $admins[1]->id, // Ann Aldave
                'updated_by' => $admins[1]->id,
            ],
            // Aron Jumawan
            [
                'name' => 'Echinacea',
                'scientific' => 'Echinacea purpurea',
                'description' => 'Echinacea is known for its immune-boosting properties.',
                'status' => 'Active',
                'likes' => 30,
                'created_by' => $admins[2]->id, // Aron Jumawan
                'updated_by' => $admins[2]->id,
            ],
            [
                'name' => 'Ginger',
                'scientific' => 'Zingiber officinale',
                'description' => 'Ginger is widely used for its medicinal properties, especially for digestive issues.',
                'status' => 'Active',

                'likes' => 18,
                'created_by' => $admins[2]->id, // Aron Jumawan
                'updated_by' => $admins[2]->id,
            ],
        ];

        // Create the plants in the database
        foreach ($plantsData as $plant) {
            Plant::create([
                'name' => $plant['name'],
                'scientific' => $plant['scientific'],
                'description' => $plant['description'],
                'status' => $plant['status'],
                'likes' => $plant['likes'],
                'created_by' => $plant['created_by'],
                'updated_by' => $plant['updated_by'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Allow the first admin to update only one of the other admins' plants
        $firstAdmin = $admins->first();

        // Fetch one plant created by other admins (excluding the first admin)
        $plantToUpdate = Plant::where('created_by', '!=', $firstAdmin->id)->first();

        if ($plantToUpdate) { // Ensure a plant was found
            $plantToUpdate->updated_by = $firstAdmin->id; // Set the updater
            $plantToUpdate->updated_at = now(); // Update the timestamp
            $plantToUpdate->save(); // Save the changes
        }
    }
}
